@extends('admin.index')

@section('title', 'E\'lonlar')

@section('content_header')
    <h4>E\'lonlar</h4>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="{{ route('admin.ads.create') }}" class="btn btn-primary btn-sm float-right">
                            <span class="fas fa-fw fa-plus"></span> Yangi e'lon
                        </a>
                    </h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Rasm</th>
                            <th>Sarlavha</th>
                            <th>Foydalanuvchi</th>
                            <th>Kategoriya</th>
                            <th>Narx</th>
                            <th>Hudud</th>
                            <th>Status</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($ads as $key => $ad)
                            <tr>
                                <td>{{ $ads->firstItem() ? $ads->firstItem() + $key : $key + 1 }}</td>

                                <td class="align-middle" style="width: 80px;">
                                <div style="width: 70px; height: 56px; overflow: hidden; border: 1px solid #dee2e6; border-radius: 4px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; position: relative;">
                                    @php
                                    $imgUrl = $ad->getFirstMediaUrl('images'); // Spatie o'zi to'g'ri URL qaytaradi
                                    @endphp

                                    @if(!empty($imgUrl))
                                    <img
                                        src="{{ $imgUrl }}"
                                        alt="{{ $ad->title }}"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                        onerror="this.style.display='none'; this.nextElementSibling && (this.nextElementSibling.style.display='flex');"
                                    >
                                    <span
                                        class="text-muted align-items-center justify-content-center"
                                        style="font-size: 1.5rem; display: none; position: absolute; inset: 0;"
                                        title="Rasm yuklanmadi"
                                    >🖼</span>
                                    @else
                                    <span class="text-muted" style="font-size: 1.5rem;" title="Rasm yo'q">🖼</span>
                                    @endif
                                </div>
                                </td>




                                <!-- <td class="align-middle" style="width: 80px;">
                                    <div style="width: 70px; height: 56px; overflow: hidden; border: 1px solid #dee2e6; border-radius: 4px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; position: relative;">
                                        @php
                                            $imgUrl = $ad->getFirstMediaUrl('images');
                                            $imgUrl = $imgUrl ? (\Illuminate\Support\Str::startsWith($imgUrl, 'http') ? $imgUrl : asset($imgUrl)) : null;
                                        @endphp
                                        @if($imgUrl)
                                            <img src="{{ $imgUrl }}" alt="{{ $ad->title }}" style="width: 100%; height: 100%; object-fit: cover; display: block;" onerror="this.style.display='none'; this.nextElementSibling && (this.nextElementSibling.style.display='flex');">
                                            <span class="text-muted align-items-center justify-content-center" style="font-size: 1.5rem; display: none; position: absolute; inset: 0;" title="Rasm yuklanmadi">🖼</span>
                                        @else
                                            <span class="text-muted" style="font-size: 1.5rem;" title="Rasm yo'q">🖼</span>
                                        @endif
                                    </div>
                                </td> -->
                                <td>{{ \Illuminate\Support\Str::limit($ad->title, 40) }}</td>
                                <td>{{ $ad->user ? $ad->user->username : '—' }}</td>
                                <td>{{ $ad->category ? $ad->category->name : '—' }}</td>
                                <td>{{ number_format($ad->price) }} {{ $ad->currency }}</td>
                                <td>{{ $ad->region ? $ad->region->name : '—' }}</td>
                                <td><span class="badge badge-{{ $ad->status === 'active' ? 'success' : 'secondary' }}">{{ $ad->status }}</span></td>
                                <td>
                                    <a href="{{ route('admin.ads.show', $ad) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('admin.ads.edit', $ad) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.ads.destroy', $ad) }}" method="post" class="d-inline" onsubmit="return confirm('O\'chirishni xohlaysizmi?')">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">E'lonlar hali mavjud emas. <a href="{{ route('admin.ads.create') }}">Yangi e'lon qo'shish</a></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                @if(method_exists($ads, 'links') && $ads->hasPages())
                    <div class="card-footer">
                        {{ $ads->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
