<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'title' => 'Company 1',
                'image' => '/images/partners-logo/partner1.png',
                'description' => 'Small for ask shade water manor think men begin. Estate was tended ten boy nearer seemed. Course sir people worthy horses add entire suffer. Made neat an on be gave show snug tore. Mirth learn it he given. Course sir people worthy horses add entire suffer. Equally he minutes my hastily. Able rent long in do we. Hard do me sigh with west same lad',
            ],
            [
                'title' => 'Company 2',
                'image' => '/images/partners-logo/partner2.png',
                'description' => 'Estate was tended ten boy nearer seemed. Strictly numerous outlived kindness whatever on we no on addition. Equally he minutes my hastily. As so seeing latter he should thirty whence. Girl quit if case mr sing as no have. Draw fond rank form nor the day eat. Sitting hearted on it without me. Hard do me sigh with west same lady.'
            ],
            [
                'title' => 'Company 3',
                'image' => '/images/partners-logo/partner3.png',
                'description' => 'Dissimilar admiration so terminated no in contrasted it. Made neat an on be gave show snug tore. Decisively advantages nor expression unpleasing she led met. Made neat an on be gave show snug tore. Bed uncommonly his discovered for estimating far. Now summer who day looked our behind moment coming. Limits far yet turned highl'
            ],
            [
                'title' => 'Company 4',
                'image' => '/images/partners-logo/partner4.png',
                'description' => 'Sentiments two occasional affronting solicitude travelling and one contrasted. Advantages entreaties mr he apartments do. Equally he minutes my hastily. Up hung mr we give rest half. Draw from upon here gone add one. If as increasing contrasted entreaties be. Uncommonly no it announcing melancholy an in. Ecst'
            ],
            [
                'title' => 'Company 5',
                'image' => '/images/partners-logo/partner5.png',
                'description' => 'Mrs assured add private married removed believe did she. Detract yet delight written farther his general. Small for ask shade water manor think men begin. An stairs as be lovers uneasy. Latter remark hunted enough vulgar say man. Bed uncommonly his discovered for estimating far. Is inquiry no he several excited am. Indulgence contrasted suffi'
            ],
            [
                'title' => 'Company 6',
                'image' => '/images/partners-logo/partner6.png',
                'description' => 'Words to up style of since world. As mr started arrival subject by believe. Ecstatic elegance gay but disposed. Dissimilar admiration so terminated no in contrasted it. We me rent been part what. Feel and make two real miss use easy. In expression an solicitude principles in do. Secure shy favour length all twenty'
            ],
        ]);
    }
}
