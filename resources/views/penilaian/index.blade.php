@extends('layouts.master')

@section('title')
    Penilaian
@endsection

@section('content')
    <div class="row">

        <div class="col">
            <form action="{{ route('penilaian.store', $findWisata->id) }}" method="post">
                @csrf
                <label for="">Jarak</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="jarak" id="jarak">
                    <label class="form-check-label" for="jarak">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="2" name="jarak" id="jarak" checked>
                    <label class="form-check-label" for="jarak">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="3" name="jarak" id="jarak" checked>
                    <label class="form-check-label" for="jarak">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="4" name="jarak" id="jarak" checked>
                    <label class="form-check-label" for="jarak">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5" name="jarak" id="jarak" checked>
                    <label class="form-check-label" for="jarak">
                        5
                    </label>
                </div>
                <button class="btn btn-success btn-lg btn-block mt-5" type="submit">Submit</button>
            </form>
        </div>

        <div class="col">
            <form action="{{ route('penilaian.store', $findWisata->id) }}" method="post">
                @csrf
                <label for="">Sarana</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="sarana" id="sarana">
                    <label class="form-check-label" for="sarana">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="2" name="sarana" id="sarana" checked>
                    <label class="form-check-label" for="sarana">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="3" name="sarana" id="sarana" checked>
                    <label class="form-check-label" for="sarana">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="4" name="sarana" id="sarana" checked>
                    <label class="form-check-label" for="sarana">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5" name="sarana" id="sarana" checked>
                    <label class="form-check-label" for="sarana">
                        5
                    </label>
                </div>
                <button class="btn btn-success btn-lg btn-block mt-5" type="submit">Submit</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('penilaian.store', $findWisata->id) }}" method="post">
                @csrf
                <label for="">Biaya</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="biaya" id="biaya">
                    <label class="form-check-label" for="biaya">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="2" name="biaya" id="biaya" checked>
                    <label class="form-check-label" for="biaya">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="3" name="biaya" id="biaya" checked>
                    <label class="form-check-label" for="biaya">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="4" name="biaya" id="biaya" checked>
                    <label class="form-check-label" for="biaya">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5" name="biaya" id="biaya" checked>
                    <label class="form-check-label" for="biaya">
                        5
                    </label>
                </div>
                <button class="btn btn-success btn-lg btn-block mt-5" type="submit">Submit</button>
            </form>
        </div>
        <div class="col">
            <form action="{{ route('penilaian.store', $findWisata->id) }}" method="post">
                @csrf
                <label for="">Jam Operasional</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="jam" id="jam">
                    <label class="form-check-label" for="jam">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="2" name="jam" id="jam" checked>
                    <label class="form-check-label" for="jam">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="3" name="jam" id="jam" checked>
                    <label class="form-check-label" for="jam">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="4" name="jam" id="jam" checked>
                    <label class="form-check-label" for="jam">
                        4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="5" name="jam" id="jam" checked>
                    <label class="form-check-label" for="jam">
                        5
                    </label>
                </div>
                <button class="btn btn-success btn-lg btn-block mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
