{{-- <h1>This is book list page {{request()->search}}</h1> --}}

{{-- @for($a = 1; $a < 100; $a++)
{{ $a }} <br>
@endfor

@while($a = 1; $a < 100; $a++)
{{ $a }} <br>
@endwhile --}}

{{-- @include('footer') --}}

@extends('layout', [
  'judul' => 'Book List'
])

@section('content')
{{-- Here content book list {!! $data1 !!} --}}
@foreach ($listBuku as $buku)
{{$buku}} <br>
@endforeach

{{formatRupiah(500000)}}
@endsection

@section('footer-script')
<script>
  alert('Hello!')
</script>
@endsection