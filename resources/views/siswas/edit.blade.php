@extends('siswas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('siswas.update',$siswa->id) }}" method="POST">
    
        @csrf
        @method('PUT')
   
         <div class="row">

         <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>nis</strong>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="nis">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama</strong>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rombel</strong>
                    <input type="text" name="rombel" value="{{ $siswa->rombel }}" class="form-control" placeholder="rombel">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rayon</strong>
                    <select class="form-control" name="rayon" id="rayon">
                    @foreach($rayons as $rayon)
                    <option value="{{$rayon->rayon}}" @if($siswa->rayon == $rayon->rayon)selected @endif>{{$rayon->rayon}}</option>
                    @endforeach
                </select>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection