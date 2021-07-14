<?php 
$identifier = 2;
include("page_header.php"); ?>
        </div>
        </section>

        <section class="s2">
            <div class="main-container">

                <div id="hero-centertitle" class="hero-centertitle">
                    <h1>
                        Search Available Hospital for Vaccination
                    </h1>     
                </div>

                <form id="search-bar" method="get" action="location.php">
                    <div class="inner-form">
                        <div class="outer-input">
                            <div class="inner-input-1">
                                <select name="province" id="province" class="browser-default custom-select" aria-label="Default select example">
                                    <option selected>Province</option>
                                    <option value="Aceh">
                                        ACEH
                                    </option>
                                    <option value="Sumatera Utara">
                                        SUMATERA UTARA
                                    </option>
                                    <option value="Sumatera Barat">
                                        SUMATERA BARAT
                                    </option>
                                    <option value="Riau">
                                        R I A U
                                    </option>
                                    <option value="Kepulauan Riau">
                                        KEPULAUAN RIAU
                                    </option>
                                    <option value="Jambi">
                                        J A M B I
                                    </option>
                                    <option value="Sumatera Selatan">
                                        SUMATERA SELATAN
                                    </option>
                                    <option value="Kepulauan Bangka Belitung">
                                        KEPULAUAN BANGKA BELITUNG
                                    </option>
                                    <option value="Bengkulu">
                                        BENGKULU
                                    </option>
                                    <option value="Lampung">
                                        LAMPUNG
                                    </option>
                                    <option value="DKI Jakarta">
                                        DKI JAKARTA
                                    </option>
                                    <option value="Jawa Barat">
                                        JAWA BARAT
                                    </option>
                                    <option value="Jawa Tengah">
                                        JAWA TENGAH
                                    </option>
                                    <option value="DI Yogyakarta">
                                        DI YOGYAKARTA
                                    </option>
                                    <option value="Jawa Timur">
                                        JAWA TIMUR
                                    </option>
                                    <option value="Banten">
                                        B A N T E N
                                    </option>
                                    <option value="Bali">
                                        BALI
                                    </option>
                                    <option value="Nusa Tenggara Barat">
                                        NUSA TENGGARA BARAT
                                    </option>
                                    <option value="Nusa Tenggara Timur">
                                        NUSA TENGGARA TIMUR
                                    </option>
                                    <option value="Kalimantan Barat">
                                        KALIMANTAN BARAT
                                    </option>
                                    <option value="Kalimantan Tengah">
                                        KALIMANTAN TENGAH
                                    </option>
                                    <option value="Kalimantan Selatan">
                                        KALIMANTAN SELATAN
                                    </option>
                                    <option value="Kalimantan Timur">
                                        KALIMANTAN TIMUR
                                    </option>
                                    <option value="Kalimantan Utara">
                                        KALIMANTAN UTARA
                                    </option>
                                    <option value="Sulawesi Utara">
                                        SULAWESI UTARA
                                    </option>
                                    <option value="Sulawesi Selatan">
                                        SULAWESI SELATAN
                                    </option>
                                    <option value="Sulawesi Tenggara">
                                        SULAWESI TENGGARA
                                    </option>
                                    <option value="Sulawesi Barat">
                                        SULAWESI BARAT
                                    </option>
                                    <option value="Sulawesi Tengah">
                                        SULAWESI TENGAH
                                    </option>
                                    <option value="Gorontalo">
                                        GORONTALO
                                    </option>
                                    <option value="Maluku">
                                        MALUKU
                                    </option>
                                    <option value="Maluku Utara">
                                        MALUKU UTARA
                                    </option>
                                    <option value="Papua">
                                        PAPUA
                                    </option>
                                    <option value="Papua Barat">
                                        PAPUA BARAT
                                    </option>
                                </select>
                            </div>
                            <div class="inner-input-2">
                                <input class="btn btn-dark" id="search" type="submit" name="submit" value="Search">
                            </div>
                        </div>
                        <div class="content-wrapper-location container bg-light p-5 rounded">
                                <div class="container text-center">
                                    <?php 
                                    
                                    $province = null;
                                    
                                    if (isset($_GET["submit"])) {
                                        $province = $_GET["province"];
                                        $result = mysqli_query($con, "select * from hospital_location where province = '$province'");
                                        $num = mysqli_num_rows($result);
                                        if ($num > 0) {
                                    ?>
                                        <h5><?php echo $num; ?> Result</h5><br>
                                        <table class="container table table-bordered bg-white">
                                                <tr>
                                                    <th rowspan="2">City</th>
                                                    <th rowspan="2">Hospital</th>
                                                    <th colspan ="2">Available</th>
                                                </tr>
                                                <tr>
                                                    <th>Sinovac</th>
                                                    <th>Astrazeneca</th>
                                                </tr>
                                    <?php
                                    while($d = mysqli_fetch_array($result)){
                                        ?>  
                                            <tr>
                                                <td> <?php echo $d['City']; ?> </td>
                                                <td> <?php echo $d['Hospital']; ?> </td>
                                                <td> <?php echo $d['Sinovac']; ?> Doses</td>
                                                <td> <?php echo $d['Astrazeneca']; ?> Doses</td>
                                            </tr>
                                        
                                    <?php 
                                    }
                                    } else {
                                        ?>
                                            <h5>No Result</h5><br>
                                        <?php
                                    }
                                    } 
                                    ?>
                                
                                    </table>
                                </div>
                        </div>     
                    </div>
                </form>
            </div>
        </section>
    
<?php include("page_footer.php"); ?>