<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Similarity;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenilaianController extends Controller
{
    public function index(Request $request)
    {
        return view('');
    }

    public function store(Request $request, $wisata)
    {
        $userId = Auth::user()->id;
        $findWisata = Wisata::find($wisata);
        $random = rand(1, 5);
        if ($request->jarak || $request->sarana || $request->biaya || $request->jam) {
            if ($request->jarak) {
                Penilaian::create([
                    'user_id' => $userId,
                    'wisata_id' => $findWisata->id,
                    'kriteria_id' => 1,
                    'value' => $request->jarak,
                ]);

                $penilaian = Penilaian::select('value')->where([['wisata_id', $findWisata->id], ['kriteria_id', 1]])->get();
                $user = Penilaian::where([['user_id', $userId], ['kriteria_id', 1], ['wisata_id', $findWisata->id]])->count();

                $sum = 0;
                $idu = 0;
                $similarity = 0;
                for ($i = 0; $i < count($penilaian); $i++) {
                    if ($penilaian[$i]->value == $request->jarak) {
                        $sum += $penilaian[$i]->value;
                        $idu = $sum / count($penilaian);
                        $similarity = $idu * $user / 11;
                    }
                }
                $similarityUser = Similarity::where([['user_id', $userId], ['similarity', 0]])->first();
                if ($similarityUser && $similarity > 0.999999) {
                    $similarityUser->forceFill([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ])->save();
                } else {
                    $similarityUser = Similarity::create([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ]);
                }
                $recom = Wisata::inRandomOrder()->limit($random)->get();
                return view('penilaian.hasil', compact('similarityUser', 'recom'));
            }
            if ($request->sarana) {
                Penilaian::create([
                    'user_id' => $userId,
                    'wisata_id' => $findWisata->id,
                    'kriteria_id' => 2,
                    'value' => $request->sarana,
                ]);


                $penilaian = Penilaian::select('value')->where([['wisata_id', $findWisata->id], ['kriteria_id', 2]])->get();
                $user = Penilaian::where([['user_id', $userId], ['kriteria_id', 2], ['wisata_id', $findWisata->id]])->count();

                $sum = 0;
                $idu = 0;
                $similarity = 0;
                for ($i = 0; $i < count($penilaian); $i++) {
                    if ($penilaian[$i]->value == $request->jarak) {
                        $sum += $penilaian[$i]->value;
                        $idu = $sum / count($penilaian);
                        $similarity = $idu * $user / 11;
                    }
                }
                $similarityUser = Similarity::where([['user_id', $userId], ['similarity', 0]])->first();
                if ($similarityUser && $similarity > 0.999999) {
                    $similarityUser->forceFill([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ])->save();
                } else {
                    $similarityUser = Similarity::create([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ]);
                }

                $recom = Wisata::inRandomOrder()->limit($random)->get();
                return view('penilaian.hasil', compact('similarityUser', 'recom'));
            }
            if ($request->biaya) {
                Penilaian::create([
                    'user_id' => $userId,
                    'wisata_id' => $findWisata->id,
                    'kriteria_id' => 3,
                    'value' => $request->biaya,
                ]);


                $penilaian = Penilaian::select('value')->where([['wisata_id', $findWisata->id], ['kriteria_id', 3]])->get();
                $user = Penilaian::where([['user_id', $userId], ['kriteria_id', 3], ['wisata_id', $findWisata->id]])->count();

                $sum = 0;
                $idu = 0;
                $similarity = 0;
                for ($i = 0; $i < count($penilaian); $i++) {
                    if ($penilaian[$i]->value == $request->jarak) {
                        $sum += $penilaian[$i]->value;
                        $idu = $sum / count($penilaian);
                        $similarity = $idu * $user / 11;
                    }
                }
                $similarityUser = Similarity::where([['user_id', $userId], ['similarity', 0]])->first();
                if ($similarityUser && $similarity > 0.999999) {
                    $similarityUser->forceFill([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ])->save();
                } else {
                    $similarityUser = Similarity::create([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ]);
                }
                $recom = Wisata::inRandomOrder()->limit($random)->get();
                return view('penilaian.hasil', compact('similarityUser', 'recom'));
            }
            if ($request->jam) {
                Penilaian::create([
                    'user_id' => $userId,
                    'wisata_id' => $findWisata->id,
                    'kriteria_id' => 4,
                    'value' => $request->jam,
                ]);


                $penilaian = Penilaian::select('value')->where([['wisata_id', $findWisata->id], ['kriteria_id', 4]])->get();
                $user = Penilaian::where([['user_id', $userId], ['kriteria_id', 4], ['wisata_id', $findWisata->id]])->count();

                $sum = 0;
                $idu = 0;
                $similarity = 0;
                for ($i = 0; $i < count($penilaian); $i++) {
                    if ($penilaian[$i]->value == $request->jarak) {
                        $sum += $penilaian[$i]->value;
                        $idu = $sum / count($penilaian);
                        $similarity = $idu * $user / 11;
                    }
                }
                $similarityUser = Similarity::where([['user_id', $userId], ['similarity', 0]])->first();
                if ($similarityUser && $similarity > 0.999999) {
                    $similarityUser->forceFill([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ])->save();
                } else {
                    $similarityUser = Similarity::create([
                        'user_id' => $userId,
                        'idu' => $idu,
                        'similarity' => $similarity,
                    ]);
                }
                $recom = Wisata::inRandomOrder()->limit($random)->get();
                return view('penilaian.hasil', compact('similarityUser', 'recom'));
            }
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $findWisata = Wisata::find($id);
        return view('penilaian.index', compact('findWisata'));
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}