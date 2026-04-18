<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $artist1 = Artist::create(['name' => 'The Minimalists', 'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAS2nYvJ4CaRTXQt3H1pfiE9GHm34-cyAao-qAUDYwCUcLzplQ6oqFw-mErphLHZ8n96MV0RYPeSdb8Xu4rER0M-0-l7utnh-MjxxukCWKTUhKflHVoKCrLngpqMbs-ubP5BDpF6ySSiwXjTia-SPbJIPniXhtGXmdkLLxX_gpt-vCp21N2_nWfztvazikL8PkxUAbE9TXJPRNrFPvVLEDQm01akeUcH4WqCeA-T4javUxkwnJBC-J8LQeG7ly58vET-KuJNlsTxEf7']);
        $artist2 = Artist::create(['name' => 'Electronic Focus', 'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDplI3stT7MKSbjRSAvk5xFG1otuOfjprewwZOi41N1EkKHQtMhGXwalKEcoZvVwVKZaGGiCTfdXLrN-iEEMYVPgDb4G6-DITPTRsQN8roKlPRL0hhoe-kACXK_qjPVq57UWn2U8XmMw76ctSz_eiPn0JVyvgcXtqTUmIxpGurFSReV6pm6nCRVgjBKifLvx27Ga3iMJELSAxNzdigqqW64UXhkgihgsXGbiFcvq0XsOhtZis6UHckoADMk-F8uNr6Ug3jZ9RZRfLe_']);

        Album::create(['artist_id' => $artist1->id, 'title' => 'Night City', 'genre' => 'Synth Wave', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAhsh_MOxzN5hoTpCmvkadltNI6JrovDtETKVZogQPuSic6GhQ0zTDxFoi-VZFc3fq3JevNmST2jdYnPuzDWAuQ0QOTFR_oyHM4FG6j2lj5JApgK22D_OBXMqr1fQpq8-zhcN4gEN-M-G0XfneKAOor7AT6ulh77JGj4rIK4pwQt0WSMRD1shiczlhoMZfGcXkUSziDj3FTYhtdTzHy2w0VmHwiIVCFdPsd0NA43KLMQBaQ9axq1QAk6PATFiDVs2WM9pLPlgIoSU0_']);
        Album::create(['artist_id' => $artist1->id, 'title' => 'Clear White', 'genre' => 'Ambient', 'type' => 'Single', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC-HyeTgBNcMmO-5SGgk5677zo4yGuKahweJ-pPpKLbsvKF4H5hIhL1V8BQhrcnfUF-_QMOqNWl0z6OhdcfWcyrOHUnFt3e4RGLmdJwRYzs1szDhp-fFHtsFrxf-cf5Sn2wXoosC6qasLnviNmNrrM14he3xpmjQwNT3Mzszkp4cXYZ935f4RDM8myG-o6dEOQ67Ly626087vCwoDrKcLOXKH0ajHYYlRXXZm6jPg5FZqvPeFq-RRxqG6DtNXOgAewngBNAU3n2z7Xs']);
        Album::create(['artist_id' => $artist2->id, 'title' => 'Velocity', 'genre' => 'Industrial', 'type' => 'EP', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBt-Om6vt_tPhnUg6JdRt6jiquQ0TlVf5gTTcfsy3-7GuVTQ6hK_TMM4Nj84coVueJBYYJvyP4_wtkOAkBOrxNK07kGAb-7ep6lwDFghJsOIgtaFEPW_iue6o4rr8vfinHhhNPV8LybqddYaQ6MA5VtTb8e-U926IfORISPlN0hUTgPd5DPRuo0BIgzR9LGvbMCNhwDqOynj_NjcaVgvsFifXvd_Fj_LCx1Fv_pM1wD5NHu7V_AVxZ9gcNcblSJAtNzmoxOyb2Vo4BJ']);
        Album::create(['artist_id' => $artist2->id, 'title' => 'Analog Dreams', 'genre' => 'Retro', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAUecKtiURQ-kTEDFgjGy22bN4yHyJzc8AaugnP8a8k4uQu15xALsOFS0bvF_qIM6HIEGA6TCM7NuO2kZAABMTO3SY_Ot_eSGEg1SdAJLgi4zgUMn1fK7qV10aHEG8gzmf8kVmQpZMgBhjsb_Zgu3oc9-BdmeAaAN5MKpmB44hMuhRAsSexWg63hMKUZ2VldiVcEsw5Gpl-pmTDuCbMIyjfzU6CG4Vkc-IOFTOMVMkBtdDCfK7OEQyVxbGPVqFaJFMjVYoZQ7zLzM_s']);
        Album::create(['artist_id' => $artist1->id, 'title' => 'The Peak', 'genre' => 'Cinematic', 'type' => 'Single', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCWl-2o5Z4H50w4KywTXYLyA-Pc8q8HlJpsOJ7xADXhTbHELT10MoxDR7rFsP_K4_EYZhLAHbTIJFl_BKBxGzAVyQie9uDaDxgB6TUgAQE9JzhQEiVMYk0x9B_Z0xoH2fAgoaqmn4TL-aATV-3dTbiKzE9LfQmM7wLpLpti7G-WyKCjvWvzQbNpGP_s4OkCzH13oFZn779wKw66CwQUy7GHF3D1WJwE9Z2R-Lrg4dNiHOw04eubWGuTJkwr6ai-xX4F-eU-BqWCUfsv']);

        Playlist::create(['name' => 'Electronic Focus', 'description' => 'The best of deep house and minimal techno.', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDplI3stT7MKSbjRSAvk5xFG1otuOfjprewwZOi41N1EkKHQtMhGXwalKEcoZvVwVKZaGGiCTfdXLrN-iEEMYVPgDb4G6-DITPTRsQN8roKlPRL0hhoe-kACXK_qjPVq57UWn2U8XmMw76ctSz_eiPn0JVyvgcXtqTUmIxpGurFSReV6pm6nCRVgjBKifLvx27Ga3iMJELSAxNzdigqqW64UXhkgihgsXGbiFcvq0XsOhtZis6UHckoADMk-F8uNr6Ug3jZ9RZRfLe_']);
        Playlist::create(['name' => 'Lo-fi Study', 'description' => 'Beats to stay focused and calm your mind.', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDQsNKJdMImCmSgt_fIgy_r6CHUHNmNwBSqKahOYp5NmgoEhFrvsI04ognWvthD8c0e5GwsPaeQgr_R_X2Zs5_5FCYNq1Jg4iom3mLWJR9-BJ-SpME7uQwsRwFw-akn98xrKtuGW1adKandJJcrxhArBv5Q1gkgA9jhF1uwJWccLQWjcWmfIJoZ_tla1V4LL2yq0a3UxXs7AH80jVLiJxrI5ksbZCWflhefAl0GApGmq_RwVl8BZRX8WUCilQW3nFtcI4z3euoM-LRD']);
        Playlist::create(['name' => 'Pure Rock', 'description' => 'Essential anthems from the legends of rock.', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA27Og0Wi8KFiK_aV1ogAlel182s4MXSZ79IP8EG72_aF-XTQS1xOLpnwO46FMH9ajTSVQ9G4XBUVOfaOoj2vi0PNpczIhdjtLB7HuriGP2Sc1A1H1diCFvtAacL-qp0vX_s-nOf6WAeKt_Is0Ve2PGtl-FpkVVwmXKMcSYKjK5uvErSzzrAQmQWY2WfxzOfGG4TE-_SWqccp_iRXu86xWJBQSaD2RCDC68b-TLQpVBMWhDTp_0pWknrs9TjIRGnSmrNcTVcdrdD9Wt']);
        Playlist::create(['name' => 'Indie Stays', 'description' => 'New acoustic sounds and indie folk gems.', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCmark31R9QVzuy_mxkpm8J5KymaWXvZ4VQsHaZok1rSrlrN23laUy4XsQrK64qQ2XxVzU3ze4m0_nRkc8Cym9NQNbVuHgsfLyZ9tpt5j9kwOnnqSZSCBNPei1c2Kmq-m7MjxgqJhlprHdaizD01P9OSItdf2w_Su1_jcCtrZxKF7tvhlNQr4p9tCvXi0wf_cI_zO_bIxxK5lwJp1D5JNKNop0GxqMAtOSzsDAJCAyYM1Ag3un8NArnc--vaiwS5iL3iCelEKyhd-Hf']);
        Playlist::create(['name' => 'Pop Rising', 'description' => 'Fresh hits from the hottest new pop artists.', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBDhJvrSIVxjZOoBg7FGoQ5YDUwLx8dv1k-qP9PeMZyMJ6Q00Petj7RaQR5UiC44f1yv3sUUeh0mv1JJdXbykb8h3mo4iDelm-oV_0EGTmGYY_k6h-yL6kIyp1bG09LG4zKhZeDmGhJk-nvG_JLTAi1U32vHgRE66RysnkragcxgDYzCB9W1PsjyXTiUKHRo6jQUIUd8Kg3NgM2twwnZyek9Xq0POA47Fqs3aJ_C10DIhQZdV3wPtH-xAnEHmEs-cw2oh5MbZSifkSX']);
    }
}
