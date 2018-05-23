<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/conectados.go.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Nav -->
        <nav id="nav" class="navbar nav-transparent">
            <div class="container">

                <div class="navbar-header">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img class="logo" src="img/logo.png" alt="logo">
                            <img class="logo-alt" src="img/logo-alt.png" alt="logo">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Collapse nav button -->
                    <div class="nav-collapse">
                        <span></span>
                    </div>
                    <!-- /Collapse nav button -->
                </div>

                <!--  Main navigation  -->
                <ul class="main-nav nav navbar-nav navbar-right">
                    <li>
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#service">Services</a>
                    </li>
                    <li>
                        <a href="#pricing">Prices</a>
                    </li>
                    <li>
                        <a href="#team">Team</a>
                    </li>
                    <li class="has-dropdown">
                        <a href="#blog">Blog</a>
                        <ul class="dropdown">
                            <li>
                                <a href="blog-single.html">blog post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- /Main navigation -->
            </div>
        </nav>
        <!-- /Nav -->

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <p class="white-text" style="font-size : 34px; margin-top:250px;"> Sejam Bem Vindos a Familia!
                                <h1 class="white-text">Conectados Solange Park</h1>
                            </p>
                            <!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- /Header -->

    <div class="fa fa-user-plus back-to-top" data-toggle="modal"  data-target="#myModal" data-placement="top" title="Cadastre-se">
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Título do modal</h4>
                </div>
                <div class="modal-body">
                    <form id="form" class="form-horizontal col-xs-12 col-md-12">
                        <div class="form-group ">                            
                            <div class="col-xs-4 col-xs-offset-1 col-sm-4 ">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nome">
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Sobre Nome">
                            </div>
                        </div>
                        <div class="form-group">                            
                            <div class="col-xs-10 col-xs-offset-1 col-sm-5 ">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Sobre Nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-5 col-xs-offset-1 col-sm-6">
                                <select class="form-control" name="departamento">
                                    <option value="" disabled selected>Departamento</option>
                                    <option value="varoes">Varões</option>
                                    <option value="senhoras">Senhoras</option>
                                    <option value="jovens">Jovens</option>
                                </select>
                            </div>
                            <div class="col-xs-5  col-sm-6">
                                <select class="form-control" name="sexo">
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="varoes">Masculino</option>
                                    <option value="senhoras">Feminino</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group">                            
                            <div class="col-xs-5 col-xs-offset-1 col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Whatsapp">
                            </div>
                            <div class="col-xs-5  col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">                            
                            <div class="col-xs-3 col-xs-offset-1 col-sm-10" style="padding:0; margin:0;!important">
                                <select class="form-control " name="dia" required>
                                    <option value="0" disabled="" selected="1">Dia</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-xs-5 col-xs-offset-1 col-sm-10">
                                
                            </div>
                            <div class="col-xs-5 col-xs-offset-1 col-sm-10">
                                
                            </div>
                            
                        </div>
                        <div class="form-group">                        
                            <div class="col-xs-2 col-xs-offset-1 col-sm-5" style="padding:0; margin:0;!important">
                                <select class="form-control " name="dia" required>
                                    <option value="0" disabled="" selected="1">Dia</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-xs-2  col-sm-5" style="padding:0; margin:0;!important">  
                                <select class="form-control " name="mes" required>
                                    <option value="0" disabled="" selected="1">Mês</option>
                                    <option value="1">Jan</option>
                                    <option value="2">Fev</option>
                                    <option value="3">Mar</option>
                                    <option value="4">Abr</option>
                                    <option value="5">Maio</option>
                                    <option value="6">Jun</option>
                                    <option value="7">Jul</option>
                                    <option value="8">Ago</option>
                                    <option value="9">Set</option>
                                    <option value="10">Out</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dez</option>
                                </select>
                            </div>
                            <div class="col-xs-2  col-sm-5" style="padding:0; margin:0;!important">
                                <select class="form-control" name="ano" required>
                                    <option value="0" disabled selected="1">Ano</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                </select>
                            </div>
                        </div>                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div id="about" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Welcome to Website</h2>
                </div>
                <!-- /Section header -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-cogs"></i>
                        <h3>Fully Customizible</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <!-- /about -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-magic"></i>
                        <h3>Awesome Features</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <!-- /about -->

                <!-- about -->
                <div class="col-md-4">
                    <div class="about">
                        <i class="fa fa-mobile"></i>
                        <h3>Fully Responsive</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
                <!-- /about -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /About -->


    <!-- Portfolio -->
    <div id="portfolio" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Featured Works</h2>
                </div>
                <!-- /Section header -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work1.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work1.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work2.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work2.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work3.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work3.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work4.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work4.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work5.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work5.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

                <!-- Work -->
                <div class="col-md-4 col-xs-6 work">
                    <img class="img-responsive" src="./img/work6.jpg" alt="">
                    <div class="overlay"></div>
                    <div class="work-content">
                        <span>Category</span>
                        <h3>Lorem ipsum dolor</h3>
                        <div class="work-link">
                            <a href="#">
                                <i class="fa fa-external-link"></i>
                            </a>
                            <a class="lightbox" href="./img/work6.jpg">
                                <i class="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Work -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Portfolio -->

    <!-- Service -->
    <div id="service" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">What we offer</h2>
                </div>
                <!-- /Section header -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-diamond"></i>
                        <h3>App Development</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-rocket"></i>
                        <h3>Graphic Design</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-cogs"></i>
                        <h3>Creative Idea</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-diamond"></i>
                        <h3>Marketing</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-pencil"></i>
                        <h3>Awesome Support</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

                <!-- service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <i class="fa fa-flask"></i>
                        <h3>Brand Design</h3>
                        <p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
                    </div>
                </div>
                <!-- /service -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Service -->


    <!-- Why Choose Us -->
    <div id="features" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- why choose us content -->
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">Why Choose Us</h2>
                    </div>
                    <p>Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id
                        diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Quis varius quam quisque id diam vel quam elementum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Mauris augue neque gravida in fermentum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Orci phasellus egestas tellus rutrum.</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                    </div>
                </div>
                <!-- /why choose us content -->

                <!-- About slider -->
                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme">
                        <img class="img-responsive" src="./img/about1.jpg" alt="">
                        <img class="img-responsive" src="./img/about2.jpg" alt="">
                        <img class="img-responsive" src="./img/about1.jpg" alt="">
                        <img class="img-responsive" src="./img/about2.jpg" alt="">
                    </div>
                </div>
                <!-- /About slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Why Choose Us -->


    <!-- Numbers -->
    <div id="numbers" class="section sm-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/background2.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-users"></i>
                        <h3 class="white-text">
                            <span class="counter">451</span>
                        </h3>
                        <span class="white-text">Happy clients</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-trophy"></i>
                        <h3 class="white-text">
                            <span class="counter">12</span>
                        </h3>
                        <span class="white-text">Awards won</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-coffee"></i>
                        <h3 class="white-text">
                            <span class="counter">154</span>K</h3>
                        <span class="white-text">Cups of Coffee</span>
                    </div>
                </div>
                <!-- /number -->

                <!-- number -->
                <div class="col-sm-3 col-xs-6">
                    <div class="number">
                        <i class="fa fa-file"></i>
                        <h3 class="white-text">
                            <span class="counter">45</span>
                        </h3>
                        <span class="white-text">Projects completed</span>
                    </div>
                </div>
                <!-- /number -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Numbers -->

    <!-- Pricing -->
    <div id="pricing" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Pricing Table</h2>
                </div>
                <!-- /Section header -->

                <!-- pricing -->
                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Basic plan</span>
                            <div class="price">
                                <h3>$9
                                    <span class="duration">/ month</span>
                                </h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>
                <!-- /pricing -->

                <!-- pricing -->
                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Silver plan</span>
                            <div class="price">
                                <h3>$19
                                    <span class="duration">/ month</span>
                                </h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>
                <!-- /pricing -->

                <!-- pricing -->
                <div class="col-sm-4">
                    <div class="pricing">
                        <div class="price-head">
                            <span class="price-title">Gold plan</span>
                            <div class="price">
                                <h3>$39
                                    <span class="duration">/ month</span>
                                </h3>
                            </div>
                        </div>
                        <ul class="price-content">
                            <li>
                                <p>1GB Disk Space</p>
                            </li>
                            <li>
                                <p>100 Email Account</p>
                            </li>
                            <li>
                                <p>24/24 Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <button class="outline-btn">Purchase now</button>
                        </div>
                    </div>
                </div>
                <!-- /pricing -->

            </div>
            <!-- Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Pricing -->


    <!-- Testimonial -->
    <div id="testimonial" class="section md-padding">

        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('./img/background3.jpg');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Testimonial slider -->
                <div class="col-md-10 col-md-offset-1">
                    <div id="testimonial-slider" class="owl-carousel owl-theme">

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="./img/perso1.jpg" alt="">
                                <h3 class="white-text">John Doe</h3>
                                <span>Web Designer</span>
                            </div>
                            <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam
                                id diam maecenas ultricies mi eget mauris.</p>
                        </div>
                        <!-- /testimonial -->

                        <!-- testimonial -->
                        <div class="testimonial">
                            <div class="testimonial-meta">
                                <img src="./img/perso2.jpg" alt="">
                                <h3 class="white-text">John Doe</h3>
                                <span>Web Designer</span>
                            </div>
                            <p class="white-text">Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam
                                id diam maecenas ultricies mi eget mauris.</p>
                        </div>
                        <!-- /testimonial -->

                    </div>
                </div>
                <!-- /Testimonial slider -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Testimonial -->

    <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Our Team</h2>
                </div>
                <!-- /Section header -->

                <!-- team -->
                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team1.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

                <!-- team -->
                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team2.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

                <!-- team -->
                <div class="col-sm-4">
                    <div class="team">
                        <div class="team-img">
                            <img class="img-responsive" src="./img/team3.jpg" alt="">
                            <div class="overlay">
                                <div class="team-social">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Designer</span>
                        </div>
                    </div>
                </div>
                <!-- /team -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

    <!-- Blog -->
    <div id="blog" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Recents news</h2>
                </div>
                <!-- /Section header -->

                <!-- blog -->
                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="./img/blog1.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li>
                                    <i class="fa fa-user"></i>John doe</li>
                                <li>
                                    <i class="fa fa-clock-o"></i>18 Oct</li>
                                <li>
                                    <i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc
                                non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog -->

                <!-- blog -->
                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="./img/blog2.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li>
                                    <i class="fa fa-user"></i>John doe</li>
                                <li>
                                    <i class="fa fa-clock-o"></i>18 Oct</li>
                                <li>
                                    <i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc
                                non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog -->

                <!-- blog -->
                <div class="col-md-4">
                    <div class="blog">
                        <div class="blog-img">
                            <img class="img-responsive" src="./img/blog3.jpg" alt="">
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li>
                                    <i class="fa fa-user"></i>John doe</li>
                                <li>
                                    <i class="fa fa-clock-o"></i>18 Oct</li>
                                <li>
                                    <i class="fa fa-comments"></i>57</li>
                            </ul>
                            <h3>Molestie at elementum eu facilisis sed odio</h3>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc
                                non blandit massa enim nec.</p>
                            <a href="blog-single.html">Read more</a>
                        </div>
                    </div>
                </div>
                <!-- /blog -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->

    <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="title">Get in touch</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-phone"></i>
                        <h3>Phone</h3>
                        <p>512-421-3940</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <h3>Email</h3>
                        <p>email@support.com</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact -->
                <div class="col-sm-4">
                    <div class="contact">
                        <i class="fa fa-map-marker"></i>
                        <h3>Address</h3>
                        <p>1739 Bubby Drive</p>
                    </div>
                </div>
                <!-- /contact -->

                <!-- contact form -->
                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form">
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="text" class="input" placeholder="Subject">
                        <textarea class="input" placeholder="Message"></textarea>
                        <button class="main-btn">Send message</button>
                    </form>
                </div>
                <!-- /contact form -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->


    <!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="index.html">
                            <img src="img/logo-alt.png" alt="logo">
                        </a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /footer follow -->

                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Copyright © 2017. All Rights Reserved. Designed by
                            <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

    <!-- Back to top -->
    <!-- <div id="back-to-top"></div> -->
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>