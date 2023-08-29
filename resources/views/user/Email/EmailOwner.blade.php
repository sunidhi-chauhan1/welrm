<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Welrm</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', sans-serif;
    }
</style>


<body>

    <table style="    width: 600px;
    margin: 20px auto;
    border: 1px solid #ccc;
    padding: 20px 20px 35px;
    ">
    
    <tbody><tr>
        <td>
            <table style="width: 100%;">
                <tbody><tr>
                    <td><div class="logo" style=" text-align: center;
                        margin-block: 8px;"><img src="https://devs.pearl-developer.com/welrm/images/Logo.png" alt="" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"></div></td>
                </tr>
            </tbody></table>
        </td>
    </tr>
       
   
    
    

<tr>
    <td><span style="font-size: 14px;
        margin-block: 8px;
      
        display: block; padding: 3px;">hello {{$hname}},

        We hope this message finds you well. We are excited to inform you about a new booking at {{$hname}} during the following dates:</span></td>
</tr>

    

    <tr>
       <td>
        <table>
            <tbody><tr>
                <th style="text-align: left; padding: 3px;">Reservation #:</th>
                <th style="text-align: left; padding: 3px;"> {{$Reservation}}</th>
            </tr>
            <tr>
                <th style="text-align: left;  padding: 3px;">Check In:</th>
                <td style="text-align: left;  padding: 3px;">{{$checkin}}</td>
            </tr>
            <tr>
                <th style="text-align: left;  padding: 3px;">Check Out:</th>
                <td style="text-align: left;  padding: 3px;">{{$checkout}}</td>
            </tr>
        </tbody></table>
       </td>
    </tr>
    
    
    
    
    <tr>
        <td>
            <table style="margin-bottom: 10px;">
                <tbody><tr>
                    <th style="text-align: left; padding: 3px;">Name: </th>
                    <td style="text-align: left; padding: 3px;">{{$name}}</td>
                </tr>
              
                <tr>
                    <th style="text-align: left; padding: 3px;">Phone: </th>
                    <td style="text-align: left; padding: 3px;">{{$usernumb}}</td>
                </tr>
                <tr>
                    <th style="text-align: left; padding: 3px;">Email: </th>
                    <td style="text-align: left; padding: 3px;">{{$useremail}}</td>
                </tr>
               
    
    
            </tbody></table>
        </td>
    </tr>

    <tr>

        <td>
            <h3 style="    padding: 3px;
            margin-block: 6px;
            font-size: 18px">Customer Details</h3>
        </td>
    
    
        <!-- <td> <span style="font-size: 14px; padding: 3px;">New Booking Confirmation - Saurabh Takur</span></td> -->
        
    </tr>
    
    <tr>
        <td>
            <table border="" style="border-collapse: collapse; width: 100%;">
                <tbody><tr>
                    <td style="    background-color: #d0def2;
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">Hotel Name</td>
                    <td style="    background-color: #d0def2;
                    padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                    ">{{$hname}}</td>
                </tr>
                <tr>
                    <td style="
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem; ">Room Type</td>
                    <td style="
                    padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">{{$roomtype}}
                    <br><strong><small>Room no:{{$roomId}}</small></strong></td>
                </tr>
                <tr>
                    <td style="     background-color: #d0def2;
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                    ">No. of Rooms </td>
                    <td style="  background-color: #d0def2;
                    padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">{{$rooms}}</td>
                </tr>
                <tr>
                    <td style="
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">No of days/night</td>
                    <td style=" padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">{{$days}}</td>
                </tr>
              
                <tr>
                    <td style="        padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                    ">Discount Price (-) </td>
                    <td style="     padding: 0.75rem 2rem;">{{$discountedprice}}</td>
                </tr>
                <tr>
                    <td style="    padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                       ">Breakfast Amount (+)</td>
                    <td style="     padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                ">{{$bfp}}</td>
                </tr>
                <tr>
                    <td style="background-color: #d0def2;
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">Total Price </td>
                    <td style="     background-color: #d0def2;
                   padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;">{{$totalprice}}</td>
                </tr>
                <tr>
                    <td style="    padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                    "> Passcode</td>
                    <td style="     padding: 0.75rem 2rem;
                    text-transform: uppercase;
                    letter-spacing: 0.1rem;
                    font-size: 0.7rem;
                ">{{$passcode}}</td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    
       
    
    
    
    
            <tr>
                <td>
                    <table style="width: 100%; margin-top: 12px;">
                        <tbody><tr>
                            <td style="width: 50%;"> <img src="https://media.istockphoto.com/id/627892060/photo/hotel-room-suite-with-view.jpg?s=612x612&amp;w=0&amp;k=20&amp;c=YBwxnGH3MkOLLpBKCvWAD8F__T-ypznRUJ_N13Zb1cU=" alt="" style="object-fit: cover; height: 200px; width: 100%; border-radius: 8px;"></td>
                            <td style="width: 50%;">
                                <img src="https://media.cnn.com/api/v1/images/stellar/prod/140127103345-peninsula-shanghai-deluxe-mock-up.jpg?q=w_2226,h_1449,x_0,y_0,c_fill" alt="" style="height: 200px; width: 100%; object-fit: cover; border-radius: 8px;">
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
            
            
            <tr>
                <td align="center" valign="top" style="padding: 20px 0px 18px; font-size: 16px;">
                    <span style="font-weight: 600; color:black; display: block; font-family: Calibri">
                        Follow us and write us by</span>
                </td>
            </tr>
    
            <tr>
                <td align="center" valign="top">
                    <ul class="icons-ul"
                        style="justify-content:center; margin: 0px; list-style-type: none;padding: 0;display: inline-flex;">
                        <li class="icons-li" style="margin: 0 7px;"><a href=""><img src="./images/icons/Youtube.ico"
                                    width="28" alt="icon"></a></li>
                        <li class="icons-li" style="margin: 0 7px;"><a href=""><img src="./images/icons/instagram.ico"
                                    width="28" alt="icon"></a></li>
                        <li class="icons-li" style="margin: 0 7px;"><a href=""><img src="./images/icons/facebook.ico"
                                    width="28" alt="icon"></a></li>
                        <li class="icons-li" style="margin: 0 7px;"><a href=""><img src="./images/icons/twitter.ico"
                                    width="28" alt="icon"></a></li>
                        <li class="icons-li" style="margin: 0 7px;"><a href=""><img src="./images/icons/linkedin.ico"
                                    width="28" alt="icon"></a></li>
                 
                    </ul>
                </td>
            </tr>
    
    
            <tr>
                <td align="center" valign="top" style="padding: 0px 0px 10px; font-size: 16px;">
                    <p style="color:black;margin:0px;font-family:calibri">
                        Copyright © Welrm. All rights reserved.</p>
                </td>
            </tr>
    
            <tr>
                <td align="center" valign="top" style="font-size:15px;">
                    <div style="text-align:center; color: #c80000 !important;">
                        <a href="" style="text-decoration: none; display: inline-block; color: #c80000  !important; font-size: 12px; font-weight: 700;">
                            Contact Us </a>
                       
                      
                        <span style="color: black; padding: 0px 1px;">|</span>
                        <a href="" style="text-decoration: none; display: inline-block; color: #c80000; font-size: 12px; font-weight: 700;">
                            Privacy policies
                        </a>
                        <span style="color: black; padding: 0px 1px;">|</span>
                        <a href="" style="text-decoration: none; display: inline-block; color: #c80000; font-size: 12px; font-weight: 700;">
                            Terms and Conditions </a>
                    </div>
                </td>
            </tr>
    
        </tbody></table>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>