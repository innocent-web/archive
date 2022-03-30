@extends('layouts.index')
@section('content')
<div class="card">
    <div class="card-header">{{ __('chearched') }} </div>
                    <div class="card-body">
                                    @if($dossier->isNotEmpty())
                                    @foreach ($dossier as $item)
                                         <p class="bg-warining">
                                     <a href=" {{route('dossiers.show', $item->id)}} "><strong>{{$item->ref}}</strong></a>
                                                {{ $item->file }}
                                        </p>

                                        @endforeach

                            @else
                            <div>
                                <h2>Not found</h2>
                            </div>
                        @endif
                    </div>
                </div>
@endsection
