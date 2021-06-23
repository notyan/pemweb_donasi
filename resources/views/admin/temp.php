<ul>
                    @foreach($saran as $s)
                        <li>{{ $s->subyek }}</li>
                        {{$s -> inserted_by  }} 
                        <br/>{{$s -> konten}}
                        <br/>{{$s -> inserted_at}}
                        <a href="#">Edit</a> 
                        <a href="#">Validasi</a> 
                        <a href="/admin/mgrSaran/{{ $s->id }}">Hapus</a>
                    @endforeach
                </ul>