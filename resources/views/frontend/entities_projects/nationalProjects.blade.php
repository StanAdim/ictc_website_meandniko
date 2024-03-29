@extends('frontend.layout.main', ['title' => 'National ICT Projects', 'header' => 'National ICT Projects'])
@section('content')
        <div class="container">
            <div class="row d-flex justify-content-center m-2">
            <h4 class="h4 text-primary">REGISTERED ICT PROJECTS</h4>

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
                            <th scope="col">Title | Year</th>
                            <th scope="col">Category</th>
                            <th scope="col">Type</th>
                            <th scope="col">Institution</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $key => $item)
                                <tr>
                                  <?php
                                  $count = $key + 1;
                                   ?>
                                    <th scope="row">{{$count}}</th>
                                    <th scope="row">{{$item->title}} - <span class="text-primary">{{$item->year}} </span></th>
                                    <th scope="row">{{$item->category}}</th>
                                    <th scope="row">
                                        @foreach($categories as $category)
                                            @if($category->id == $item->type + 1)
                                                {{$category->categoryName}}
                                            @endif
                                        @endforeach
                                    
                                    </th>
                                    <th scope="row">{{$item->institution}}</th>                                   
                                   
                                </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                      
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
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