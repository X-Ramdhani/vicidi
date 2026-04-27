<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChatbotKnowledge;

class ChatbotSeeder extends Seeder
{
    public function run()
    {
        ChatbotKnowledge::truncate();

        $data = [
            // ================= TOPIK 1: PROFIL PERUSAHAAN (VIDICI) =================
            [
                'topic' => 'Profil Perusahaan',
                'intent_name' => 'tentang_vidici',
                'keywords' => ['apa itu vidici', 'profil vidici', 'perusahaan apa', 'vidya diginara cipta', 'tentang kalian', 'siapa vidici'],
                'response' => 'VIDICI (Vidya Diginara Cipta) adalah Strategic IT Partner yang fokus pada pengembangan aplikasi kustom, manajemen operasional IT, solusi ERP, dan Core Banking. Kami memadukan talenta engineer terbaik dengan skema biaya operasional yang efisien.'
            ],
            [
                'topic' => 'Profil Perusahaan',
                'intent_name' => 'lokasi_kantor',
                'keywords' => ['kantor', 'alamat', 'lokasi', 'dimana kantor', 'alamat lengkap', 'kantor pusat', 'yogyakarta', 'jakarta', 'malang'],
                'response' => 'Operasional utama kami berjalan melalui GSOC & Development Center di Jogjakarta dan Malang, sementara Managed Operations Hub kami berpusat di Jakarta. Anda bisa menghubungi manajemen kami di info@vidici.id.'
            ],
            [
                'topic' => 'Profil Perusahaan',
                'intent_name' => 'portofolio_klien',
                'keywords' => ['klien', 'portofolio', 'pernah kerja sama siapa', 'proyek', 'pengalaman', 'industri', 'bumn', 'telco', 'perbankan'],
                'response' => 'Kami telah mengantarkan lebih dari 100 proyek enterprise. Portofolio utama kami meliputi sektor BUMN & Telco (infrastruktur berskala nasional), Perbankan (sistem pembayaran dan kepatuhan BI/OJK), serta digitalisasi SME & UMKM.'
            ],

            // ================= TOPIK 2: CORENETA ERP =================
            [
                'topic' => 'CORENETA ERP',
                'intent_name' => 'tentang_coreneta',
                'keywords' => ['apa itu coreneta', 'erp', 'sistem isp', 'coreneta', 'erp isp', 'software isp', 'aplikasi isp', 'odoo'],
                'response' => 'CORENETA adalah Unified ERP Platform khusus untuk ISP (Internet Service Provider) yang ditenagai oleh Odoo. Sistem ini menyatukan operasional jaringan, pelanggan, dan bisnis dalam satu Single Source of Truth.'
            ],
            [
                'topic' => 'CORENETA ERP',
                'intent_name' => 'fitur_coreneta',
                'keywords' => ['fitur coreneta', 'kapabilitas coreneta', 'bisa apa saja coreneta', 'modul coreneta', 'billing', 'crm', 'noc'],
                'response' => 'Kapabilitas inti CORENETA meliputi: Billing & Revenue (Automated Invoicing), CRM & Customer Experience, NOC & Service Operations (Ticketing & SLA), Inventory & Asset Management, serta Omnichannel & WhatsApp API Integration.'
            ],
            [
                'topic' => 'CORENETA ERP',
                'intent_name' => 'target_coreneta',
                'keywords' => ['untuk siapa coreneta', 'cocok untuk', 'target coreneta', 'jenis isp', 'broadband', 'dedicated'],
                'response' => 'CORENETA dirancang secara khusus untuk Broadband ISP, Dedicated ISP, Regional POP-based ISP, dan ISP berkembang yang sedang mempersiapkan ekspansi infrastruktur untuk periode 2026-2027.'
            ],

            // ================= TOPIK 3: LAYANAN UTAMA =================
            [
                'topic' => 'Layanan Utama',
                'intent_name' => 'managed_services',
                'keywords' => ['managed services', 'managed ops', 'gsoc', 'monitoring', 'support it', 'operasional it', 'noc'],
                'response' => 'Layanan Managed Operations / GSOC kami mencakup Monitoring 24/7, Incident Management, Problem Management, hingga L1–L3 Support untuk menjaga stabilitas operasional IT perusahaan Anda.'
            ],
            [
                'topic' => 'Layanan Utama',
                'intent_name' => 'custom_apps',
                'keywords' => ['bikin aplikasi', 'buat web', 'mobile app', 'custom development', 'software dev', 'bikin sistem'],
                'response' => 'Kami menyediakan Custom Development berskala enterprise, mencakup pengembangan Web Applications, Mobile Apps, integrasi API yang kompleks, serta arsitektur Cloud-Native.'
            ],
            [
                'topic' => 'Layanan Utama',
                'intent_name' => 'banking_systems',
                'keywords' => ['sistem bank', 'core banking', 'payment gateway', 'digital banking', 'fintech', 'pembayaran'],
                'response' => 'Kami memiliki spesialisasi dalam Banking Solutions, termasuk implementasi Core Banking modern (microservices), integrasi Payment Gateway yang aman, Digital Banking, dan sistem Mobile Payment yang patuh regulasi.'
            ],

            // ================= TOPIK 4: KARIER & KONSULTASI =================
            [
                'topic' => 'Karier & Kontak',
                'intent_name' => 'lowongan_kerja',
                'keywords' => ['lowongan', 'loker', 'karier', 'career', 'magang', 'internship', 'gabung tim', 'rekrutmen'],
                'response' => 'VIDICI selalu mencari talenta terbaik (Full-stack, DevOps, PM) untuk bergabung di hub Jogja dan Malang. Kami juga membuka program internship intensif. Silakan cek menu "Karier" atau kirim CV Anda melalui email.'
            ],
            [
                'topic' => 'Karier & Kontak',
                'intent_name' => 'jadwal_konsultasi',
                'keywords' => ['konsultasi', 'request demo', 'hubungi', 'meeting', 'diskusi', 'tanya harga', 'penawaran'],
                'response' => 'Siap mempercepat transformasi digital Anda? Silakan isi form di halaman "Hubungi Kami", kirim pesan ke info@vidici.id, atau hubungi +62 811-1170-196 untuk menjadwalkan konsultasi awal tanpa komitmen.'
            ],

            // ================= TOPIK UMUM (GLOBAL) =================
            [
                'topic' => 'Umum',
                'intent_name' => 'sapaan',
                'keywords' => ['halo', 'hai', 'pagi', 'siang', 'sore', 'malam', 'admin', 'halo admin', 'ping'],
                'response' => 'Halo! Selamat datang di pusat layanan VIDICI (Vidya Diginara Cipta). Saya adalah asisten virtual Anda. Ada yang bisa saya bantu terkait layanan IT, pengembangan aplikasi, atau solusi CORENETA ERP kami?'
            ],
            [
                'topic' => 'Umum',
                'intent_name' => 'terima_kasih',
                'keywords' => ['terimakasih', 'makasih', 'thanks', 'oke', 'paham', 'baik min', 'siap'],
                'response' => 'Sama-sama! Senang bisa membantu. Jika Anda memiliki kebutuhan teknis lebih lanjut atau ingin menjadwalkan konsultasi, jangan ragu untuk menghubungi kami kembali.'
            ]
        ];

        foreach ($data as $item) {
            ChatbotKnowledge::create([
                'topic' => $item['topic'],
                'intent_name' => $item['intent_name'],
                'keywords' => json_encode($item['keywords']),
                'response' => $item['response']
            ]);
        }
    }
}