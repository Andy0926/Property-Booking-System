@extends('layout')

@section('content')

    <div class="container  pt-5">
        <div class="row">
            <div class="col-sm-8">
                <div class="project-sort">
                    <div class="project-sort-item">
                        <form class="form-inline">
                            <div class="form-group">
                                <label for="phase-select">Phase :</label>
                                <select class="form-control ml-2 mr-2 form-control-sm" id="phase-select">
                                    <option>All Projects</option>
                                    <option>Completed</option>
                                    <option>Progress</option>
                                    <option>Future</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sort-select">Sort :</label>
                                <select class="form-control ml-2 form-control-sm" id="sort-select">
                                    <option>Date</option>
                                    <option>Name</option>
                                    <option>End date</option>
                                    <option>Start Date</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col-->
        </div>
        <div class="row text-center border margin-space">
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="container project-container" max-width="90%">
        <div class="row text-center border margin-space">
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
            <div class=" col-xs-12 col-sm-6 col-md-4 border ">
                <p class="text-uppercase mb-0 font-18 font-weight-bold">Orange Limited</p>
                <img class="project-img" src="img/cons1.jpg">
                <h4 class="mt-0 mb-3"><a href="" class="text-dark">New Admin Design</a></h4>
                <p class="text-muted font-13">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. When an unknown printer took a galley of type and scrambled it...<a href="#"
                        class="font-600 text-muted">view more</a></p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h3 class="mb-0">2500</h3>
                        <p class="text-muted">Area</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">2</h3>
                        <p class="text-muted">Beds</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">3</h3>
                        <p class="text-muted">Bath</p>
                    </li>
                    <li class="list-inline-item">
                        <h3 class="mb-0">1</h3>
                        <p class="text-muted">Garage</p>
                    </li>
                </ul>
                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item ml-3">
                        <p>Type : </p>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-success font-weight-bold" href="#" data-toggle="tooltip" data-placement="top">
                            Single Storey Terrace House
                        </a>
                    </li>
                </ul>

                <ul class="list-inline text-left mb-0">
                    <li class="list-inline-item">
                        <div class="project-members mb-4 text-left">
                            <label class="mr-3 ml-3">Agent :</label>
                            <a href="#" data-toggle="tooltip" title="" data-original-title="Mat Helme"><img
                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                    class="rounded-circle thumb-sm" alt="friend"> </a>

                        </div>


                    </li>
                    <li class="list-inline-item float-right">
                        <a href="projectDetails.html" class="btn btn-success btn-rounded w-md  text-center mr-5 ">View Property</a>
                    </li>
                </ul>




                <label class="">Property Progress: <span class="text-custom">55/85</span></label>
                <div class="progress mb-1" style="height: 7px;">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4 footer-section">
                    <img class="footer-logo" src="img/logo2.png">
                    <hr class="light">
                    <p>(+603) 3323 5120, (+603) 3319 2120</p>
                    <p>upicongroup@upicon.my</p>

                </div>
                <div class="col-md-4 footer-section">
                    <hr class="light">
                    <p>Operating Hour</p>
                    <hr class="light">
                    <p>Weekday: 9.00am - 5.00pm</p>
                    <p>Saturday: 9.00am - 1.00pm</p>
                    <p>Sunday: Close</p>
                </div>
                <div class="col-md-4 footer-section">
                    <hr class="light">
                    <p>Location</p>
                    <hr class="light">
                    <p>WISMA UPICON No. 34, 34-1 & 34-2, Jalan Jasmin 6/KS6, Bandar Botanic, 41200 Klang, Selangor,
                        Malaysia</p>
                </div>
                <div class="col-12 footer-section">
                    <hr class="light">
                    <h6>&copy; Upicon.my | 2013 - 2020 | Website Developed by Tech Star</h6>
                </div>
            </div>
        </div>
    </footer>
	@endsection