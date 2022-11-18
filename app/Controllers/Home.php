<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\ProfileModel;
use App\Models\MilestoneModel;
use App\Models\KontakModel;
use App\Models\TeamModel;
use App\Models\PortofolioModel;
use App\Models\ArtikelModel;
use App\Models\PembayaranModel;
use App\Models\UsersModel;
use App\Models\PurchaseModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ProfileModel = new ProfileModel();
        $this->MilestoneModel = new MilestoneModel();
        $this->KontakModel = new KontakModel();
        $this->TeamModel = new TeamModel();
        $this->PortofolioModel = new PortofolioModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->PembayaranModel = new PembayaranModel();
        $this->UsersModel = new UsersModel();
        $this->PurchaseModel = new PurchaseModel();
    }
    
    function url_get_contents($url) {
        if (!function_exists('curl_init')){ 
            die('CURL is not installed!');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            //'profile' => $this->ProfileModel->findAll(),
            //'milestoneLimit' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(2),
            //'milestone' => $this->MilestoneModel->orderBy('year', 'asc')->findAll(),
            'kontak' => $this->KontakModel->findAll(),
            //'team' => $this->TeamModel->findAll(),            
            //'artikel' => $this->ArtikelModel->limit(3)->findAll(),
            'kursus' => json_decode($this->url_get_contents('https://stufast.id/api/course/latest/author/2?limit=3')),
            'group_portofolio' => $this->PortofolioModel->groupBy('kategori')->orderBy('kategori','asc')->findAll(),
            'portofolio' => $this->PortofolioModel->findAll(4),
        ];
        return view('swevel/homepage/homepage', $data);
    }

    public function artikel()
    {
        $data = [
            'title' => 'Artikel',
            'kontak' => $this->KontakModel->findAll(),
            'artikel' => $this->ArtikelModel->findAll(),
        ];
        return view('swevel/artikel/artikel', $data);
    }

    public function detailArtikel($slug)
    {
        $artikel = $this->ArtikelModel->where('slug', $slug)->first();
        $data = [
            'title' => 'Detail Artikel',
            'kontak' => $this->KontakModel->findAll(),
            'artikel' => $artikel,
            'artikel_all' => $this->ArtikelModel->getArticleNotSlug($slug),
        ];
        return view('swevel/artikel/detail_artikel', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'FAQ',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/faq', $data);
    }
    public function kebijakanPrivasi()
    {
        $data = [
            'title' => 'Kebijakan Privasi',
            'kontak' => $this->KontakModel->findAll(),
        ];
        return view('swevel/kebijakan_privasi', $data);
    }

    public function payment($id)
    {

        // $email = session()->get('swevel_email');
        // $user = $this->UsersModel->where('email',$email)->first();
        // $purchase = $this->PurchaseModel->where('id_user', $user['id'])->where('id_course',$id)->first();
        // if($purchase){
        //     if($purchase['status'] == 'approved') {
        //         session()->setFlashdata('message','<div class="text-center"><div class="mb-3"><i class="fa-solid fa-check text-purple fw-bold"></i></div><div class="fw-bold h3 text-purple">Anda telah membeli course ini</div>. <br> <a href="/course/materi/'.$id.'" class="btn btn-purple mt-3 br-20">Kembali ke materi</a></div>');
        //         return redirect('purchase-done');
        //     }
        // }

        $data = [
            'title' => 'Pembayaran',
            'id' => $id,
            'bank_limit' => $this->PembayaranModel->findAll(4),
            'bank' => $this->PembayaranModel->findAll(),
        ];
        return view('swevel/payment/payment', $data);
    }

    public function detail_payment()
    {
        $email = session()->get('swevel_email');
        $user = $this->UsersModel->where('email', $email)->first();
        $course = $this->request->getVar('course');
        $data = [
            'title' => 'Detail Pembayaran',
            'purchase' => $this->PurchaseModel->where('id_user', $user['id'])->where('id_course', $course)->first(),
            'id' => $course,
        ];
        return view('swevel/payment/detail_payment', $data);
    }

    public function purchase_message()
    {
        $course = $this->request->getVar('course');
        $data = [
            'title' => 'Pesan Pembayaran',
        ];
        return view('swevel/payment/purchase_message', $data);
    }

    public function save_purchase()
    {
        $email = session()->get('swevel_email');
        $user = $this->UsersModel->where('email', $email)->first();
        $norek = $this->request->getVar('bank');
        $bank = $this->PembayaranModel->where('no_rekening', $norek)->first();
        $course = $this->request->getVar('course');

        $check_purchase = $this->PurchaseModel->where('id_user', $user['id'])->where('id_course', $course)->where('status', 'approved')->first();
        if ($check_purchase) {
            return json_encode([
                'code' => '500',
                'message' => 'sudah-beli',
                'redirect' => 'course/materi/' . $course,
            ]);
        }

        $data = [
            'id_user' => $user['id'],
            'id_bank' => $bank['id'],
            'id_course' => htmlspecialchars($course),
            'harga_bayar' => htmlspecialchars($this->request->getVar('harga')),
            'status' => 'approved',
        ];
        $save = $this->PurchaseModel->insert($data);
        if ($save) {
            return json_encode([
                'code' => '200',
                'message' => 'success',
                'redirect' => '/payment/detail?course=' . $course,
            ]);
        } else {
            return json_encode([
                'code' => '500',
                'message' => 'failed',
            ]);
        }
    }    

    public function getPortofolio($kategori){


        if($kategori == 'semua'){
            $portofolio = $this->PortofolioModel->findAll(8);            
            return json_encode([
                'code' => '200',
                'message' => 'success',
                'portofolio' => $portofolio,
            ]);            
        }

        $portofolio = $this->PortofolioModel->where('kategori',$kategori)->findAll();
        if($portofolio){
            return json_encode([
                'code' => '200',
                'message' => 'success',
                'portofolio' => $portofolio,
            ]);            
        }else{
            return json_encode([
                'code' => '404',
                'message' => 'error',                
            ]);            
        }

    }
}
