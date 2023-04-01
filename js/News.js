function LoadData(Data)
{
    if(Data=="btn1")
    {
        
        document.getElementById("img1").src = "../images/tropy.png "; 
        document.getElementById("item1").innerHTML = "<p id='p1'>Vivacious Designs And Textile has won SLIM digis for ECO-Friendly Garment aword which held on 01 of april 2022 in Galle face hotel. We Vivacious Designs And Textile want to thank everyone who help to achive this aword. Keep helping us for to reach Zero emission company</p>";
        document.getElementById("img2").src = "../images/update.jpg ";
        document.getElementById("item2").innerHTML = "<p id='p2'>Please be informed that we will conduct system upgrade from 23:00 on 31/3/2018 (Saturday)to 15:00 on 1/4/2018 (Sunday) . During this period, web site is temperly down. We advise customers to make necessary arrangement in advance and appreciate the kind understanding of customers. For customer enquiry, please call our 24-hour Customer Services Hotline 011 4478758</p>";
    }
    else if (Data=="btn2")
    {
        
        document.getElementById("img1").src = "../images/branch.jpg";
        document.getElementById("item1").innerHTML = "<p id='p1'>We are proud to announce that from 26th of May 2022 we are opening a new physical shop at Majestic City, Colombo.  Our new store will accommodate cutting edge technology in order to make physical shopping effortless to preserve precious time of our loyal customers. Considering the current corona virus situation in Sri Lanka, we can assure the customer that we have taken every single precaution in order to protect the customer.</p>";
        document.getElementById("img2").src = "../images/clob.jpg";
        document.getElementById("item2").innerHTML = "<p id='p2'>We would like to be the first to provide information about one of our best collaboration project so far. The collaboration will take place between our company and Gucci. Gucci have been a world-renowned clothing company with millions of customers and as they are specialized in high-end clothing we hope to gain some insight as to how they have become successful through out the years.</p>";
    }
    else if (Data=="btn3")
    {
        
        document.getElementById("img1").src = "../images/fashionshow.jpg";
        document.getElementById("item1").innerHTML = "<p id='p1'>31st of May is the day you all have been waiting for, its time to announce our first ever fashion show sponsored by MAS. The fashion show will begin at 6.30pm on B.M.I.C.H. Tickets will be available to buy at any physical stores and if preferred tickets can be bought from www.ticketmaster.com. The show will feature fashion models throughout Sri Lanka and as the main event, special guest who has remain nameless for now will end the show in a unique magnificent way.</p>";
        document.getElementById("img2").src = "../images/bitcoin.jpg";
        document.getElementById("item2").innerHTML = "<p id='p2'>We are now accepting bitcoins for money tranfram. Only for limited time for to test customer feedback on the change.We will consider how long the option enable on customer feedback. So kindly request you to leave a feedback about bitcoin</p></div>";
    }
    else
    {
        alert("Invalid!!!");
    }
    
}
