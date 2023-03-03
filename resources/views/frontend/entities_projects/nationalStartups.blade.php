@extends('frontend.layout.main', ['title' => 'National Startups', 'header' => 'National Startups'])
@section('content')
        <div class="container">
            <div class="row d-flex justify-content-center m-2">
            <h4 class="h4 text-primary">REGISTERED STARTUPS</h4>

                <div class="col-md-12 ">
                    {{-- MESSAGE PASSED  --}}
                   @if(session('status'))
                   <div class="justify-content-center alert alert-success text-center m-2">
                       {{ session('status') }}
                   </div>
                 @endif
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Entity Title</th>
                            <th scope="col">Brela Registration</th>
                            <th scope="col">Contacts</th>
                            <th scope="col">Location</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($entities as $key => $item)
                                <tr>
                                    <?php
                                    $count = $key + 1;
                                     ?>
                                    <th scope="row">{{$count}}</th>
                                    <th scope="row">{{$item->entity_name}}</th>
                                    <th scope="row text-center">
                                        @if ($item->is_registered)
                                        <b class="text-success">Done</b>
                                            @else
                                        <b class="text-secondary">Unregisted</b>                                          
                                            
                                        @endif
                                    </th>
                                    <th scope="row">{{$item->phone}} | {{$item->email}}</th>
                                    <th scope="row"> 
                                        @foreach ($regions as $region)
                                            @if($region->id == $item->region_id)
                                                {{$region->name}}
                                            @endif
                                        @endforeach
                                        - {{$item->district}}
                                    </th>
                                   
                                </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="?page=2">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
                </div>
            </div>
        </div>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush