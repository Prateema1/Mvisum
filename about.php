<?php
include_once 'db.php';
include 'topheader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>mvisu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="menu.js"></script>
</head>
<body>
<div class="container" style="margin-top: 117px;">
    <div class="row">
        <div class="col-md-8" >
            <div class="menu-container" style="padding: 0; margin-top: 0">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Service</a>
                            <ul>
                                <?php
                                $sql_ser = "select * from services";
                                $run_ser = mysqli_query($conn,$sql_ser);
                                while($rows_ser = mysqli_fetch_assoc($run_ser)){
                                    echo" 
                                    <li><a href='services.php?type=$rows_ser[serviceType]&id=$rows_ser[id]'>$rows_ser[serviceType]</a></li>
                                    ";
                                }
                                ?>
                            </ul>
                        </li>
                        <li><a href="#">Countries</a>
                            <ul>
                                <?php
                                $sql = "select * from continent";
                                $run  =mysqli_query($conn,$sql);
                                while($rows = mysqli_fetch_assoc($run)){
                                    $ctName=$rows['continentName'];
                                    echo "
                                    <li><a href='#'>$rows[continentName]</a>
                                    <ul>";
                                    ?>
                                    <?php
                                    $sql_cnt = "select * from countries where continentId='$rows[id]'";
                                    $run_cnt = mysqli_query($conn,$sql_cnt);
                                    while($row = mysqli_fetch_assoc($run_cnt)){
                                        $cntName=$row['country'];
                                        $cntId=$row['id'];
                                        echo"
                                        <li><a href='countryDetail.php?continent=$ctName&id=$cntId&country=$cntName'>$row[country]</a></li>
                                         ";
                                    }
                                    ?>
                                    <?php
                                    echo "</ul></li>";
                                }
                                ?>

                            </ul>
                        </li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                    </ul>
                </div>
            </div>
            <section style="width: 100%; overflow: scroll; height: 500px; text-align: justify!important; padding: 0">
                    <h2 style="font-family: 'Droid Serif', serif">Mvisum Immigration and Education</h2>
                    <hr>
                    <h4><u>Business Information</u></h4>
                <table class="table-body">
                    <tr>
                        <td>
                            Business Name:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            Mvisum Immigration and Education
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Business Address:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            5, Lajwanti Complex,<br/> BMC Chowk, Jalandhar , Punjab, India. 144001.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            <a href="mailto:contact@mvisum.co.in">contact@mvisum.co.in</a>&nbsp;&nbsp;
                            <a href="mailto:info@mvisum.co.in">info@mvisum.co.in</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            <a href="tel:+91-181-4150140">+91-181-4150140</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Mobile:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            <a href="tel:+91-9855200140">+91-9855200140</a>
                            <a href="tel:+91-7889243995">+91-7889243995</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Website:&nbsp;&nbsp;
                        </td>
                        <td style="text-align: justify; font-family: 'Arial Narrow'; font-size: 13px">
                            <a href="www.mvisum.co.in">www.mvisum.co.in</a>

                        </td>
                    </tr>
                </table>
                <h4><u>General Business Activities </u></h4>
                <p>
                    Mvisum Immigration and Education has been a famed & trusted immigration & visa consultation consultancy in Punjab,
                    India which started with its objective to serve the community in its immigration and study abroad needs along with counselling and guidance for hassle-free and enjoyable experience in a better and fruitful manner.
                    We take pride in working together with our customers as a team, taking pro-active steps to ensure that all needs are met.
                </p>
                <h4><u>Company Strategy</u></h4>
                <p>
                <h5><b>Purpose:</b></h5>
                To be a leader in the immigration and overseas education consultancy by providing enhanced services and relationships.
                <h5><b>Vision:</b></h5>
                To reform the way of providing services for immigration and overseas education needs of clients.
                <h5><b>Mission statement:</b></h5>
                To provide quality services that exceeds the expectations of our esteemed clients and to strengthen the bonds of a client relationship.
                <h5><b>Core values</b></h5>
                <ul class="tick">
                    <li>Respect for clients and faith building.</li>
                    <li>Honesty, integrity and business ethics in all aspects of business functioning</li>
                    <li>Appreciating the valuable investment of time, efforts & funds that clients make</li>
                </ul>
                <h5><b>Scope of Work</b></h5>
                <ul class="tick">
                    <li><b><i>Overseas student visa for Europe, USA, Canada, Australia, New Zealand, Asia and South Africa</i></b></li>
                    <li><b><i>Tourist and Visitor visa consultancy all over the world</i></b></li>
                    <li><b><i>Spouse visa</i></b></li>
                    <li><b><i>Business visa assistance</i></b></li>
                    <li><b><i>Student Visa With or Without IELTS*</i></b></li>
                    <li><b><i>Promoting top ranked Universities & Colleges with Job Placement after study.</i></b></li>
                </ul>
                </p>
            </section>
            <marquee scrolldelay="120"  onmouseover="this.stop();" onmouseout="this.start();">
                <ul class="list-inline">
                    <?php
                    $sql_cc = "select * from continent";
                    $run_cc  =mysqli_query($conn,$sql);
                    while($rows = mysqli_fetch_assoc($run_cc)){
                        $ctName=$rows['continentName'];
                        $sql_c = "select * from countries";
                        $run_c = mysqli_query($conn,$sql_c);
                        while($rowc = mysqli_fetch_assoc($run_c)){
                            $cntName=$rowc['country'];
                            $cntId=$rowc['id'];
                            $color1='red';
                            $color2='blue';
                            $color3='black';
                            $color4='green';
                            if(strlen($rowc['country'])<6){
                                echo "
                    <li><h4 style='border: 1px solid; color: white; background: $color1'>
                    <a href='countryDetail.php?continent=$ctName&id=$cntId&country=$cntName' style='color:white;text-decoration: none; '>
                                $rowc[country]
                      </a>
                      </h4></li>
                    ";
                            }elseif (strlen($rowc['country'])>=6 && strlen($rowc['country'])<=7){
                                echo "
                    <li><h4 style='border: 1px solid; color: white; background: $color2'>
                    <a href='countryDetail.php?continent=$ctName&id=$cntId&country=$cntName' style='color:white;text-decoration: none; '>
                                $rowc[country]
                      </a>
                      </h4></li>
                    ";
                            }elseif (strlen($rowc['country'])==8){
                                echo "
                    <li><h4 style='border: 1px solid; color: white; background: $color3'>
                    <a href='countryDetail.php?continent=$ctName&id=$cntId&country=$cntName' style='color:white;text-decoration: none; '>
                                $rowc[country]
                      </a>
                      </h4></li>
                    ";
                            }elseif (strlen($rowc['country'])>=9){
                                echo "
                    <li><h4 style='border: 1px solid; color: white; background: $color4'>
                    <a href='countryDetail.php?continent=$ctName&id=$cntId&country=$cntName' style='color:white;text-decoration: none; '>
                                $rowc[country]
                      </a>
                      </h4></li>
                    ";
                            }

                        }
                    }

                    ?>
                </ul>
            </marquee>
            <div class="news">
                <h5 style="color: blue; font-weight: bolder"><u>News & Events</u></h5>
                <marquee scrolldelay="180" direction="up"  onmouseover="this.stop()" onmouseout="this.start()" behavior="scroll" style="height: 50px">
                    <ul>
                        <?php
                        $sql_news = "select * from news ORDER BY id DESC LIMIT 10";
                        $run_news = mysqli_query($conn,$sql_news);
                        while($rows_news = mysqli_fetch_assoc($run_news)){
                            echo "
                            <li><a href='news.php?id=$rows_news[id]'>$rows_news[heading]</a></li>
                            ";
                            ;                        }
                        ?>
                    </ul>
                </marquee>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <button class="btn btn-block btn-primary" style="font-size: 20px">Visa Option</button>
                <div class="col-xs-12 text-center" style="margin-top: 5px">
                    <?php
                    $sql_visa = "select * from visa";
                    $run_visa = mysqli_query($conn,$sql_visa);
                    while ($rows_visa = mysqli_fetch_assoc($run_visa)){
                        if($rows_visa['id']==1){
                            echo"
                        <a href='visa.php?type=$rows_visa[visaType]&id=$rows_visa[id]'><button class='btn btn-block btn-default'>$rows_visa[visaType]</button></a>
                        ";
                        }elseif($rows_visa['id']==2){
                            echo"
                        <a href='visa.php?type=$rows_visa[visaType]&id=$rows_visa[id]'><button class='btn btn-block btn-success'>$rows_visa[visaType]</button></a>
                        ";
                        }elseif($rows_visa['id']==3){
                            echo"
                        <a href='visa.php?type=$rows_visa[visaType]&id=$rows_visa[id]'><button class='btn btn-block btn-danger'>$rows_visa[visaType]</button></a>
                        ";
                        }elseif($rows_visa['id']==4){
                            echo"
                        <a href='visa.php?type=$rows_visa[visaType]&id=$rows_visa[id]'><button class='btn btn-block btn-info'>$rows_visa[visaType]</button></a>
                        ";
                        }elseif($rows_visa['id']==5){
                            echo"
                        <a href='visa.php?type=$rows_visa[visaType]&id=$rows_visa[id]'><button class='btn btn-block btn-warning'>$rows_visa[visaType]</button></a>
                        ";
                        }

                    }
                    ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4>Request a call-back</h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="loc" name="loc" placeholder="location" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="phone" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="query" placeholder="enter query" required></textarea>
                        </div>
                        <button class="btn btn-success" name="submit">Submit</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <a href="work.php"><button class="btn btn-danger">Work with us</button></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="footer">
        <h6 class="text-center">&copy;&nbsp;<a href="index.php">MVISUM</a>&nbsp;2018</h6>
    </div>
</div>
</body>
</html>
