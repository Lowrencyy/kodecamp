<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KodeCamp86</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    {{-- <link rel="stylesheet" href="css/lectures.css"> --}}
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}

a{
    text-decoration: none;
    color: #5a5a5a;
}

img{
    cursor: pointer;
}

.flex-div{
    display: flex;
    align-items: center;
}

nav{
    padding: 10px 2% ;
    justify-content: space-between;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    background-color: #fff;
    position: sticky;
    top: 0;
    z-index: 10;
}

.nav-left .menu{
    width: 22px;
    margin-right: 25px;
}

.nav-left .logo{
    width: 130px;
}

.nav-right img{
    width: 25px;
    margin-right: 25px;
}

.nav-right .user{
    width: 45px;
    border-radius: 50%;
    margin-right: 0;
}

.nav-middle .mic{
    width: 16px;
}

.nav-middle .search{
    border: 1px solid #ccc;
    margin-right: 15px;
    padding: 8px 12px;
    border-radius: 30px;
}
.nav-middle .search input{
    width: 400px;
    border: 0;
    outline: 0;
    background-color: transparent;
}

.nav-middle .search img{
    width: 15px;
}

/*--sidebar--*/

.sidebar{
    width: 15%;
    height: 100vh;
    background-color: #fff;
    top: 0;
    position:absolute;
    padding-left: 2%;
    padding-top: 80px;
   
}

.sidebar .shortcut a img{
    width: 20px;
    margin-right: 20px;
}

.shortcut a{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    width: fit-content;
    flex-wrap: wrap;
}

.shortcut a:first-child{
    color: #ed3833;
}

.sidebar hr{
    border: 0;
    height: 1px;
    background: #ccc;
    width: 85%;
}

.subscribed h3{
    font-size: 13px;
    margin: 20px 0;
    color: #5a5a5a;
}

.subscribed a{
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    width: fit-content;
    flex-wrap: wrap;
}

.subscribed a img{
    width: 35px;
    border-radius: 50%;
    margin-right: 20px;
}

.small-sidebar{
    width: 5%;
}

.small-sidebar a p{
    display: none;
}
.small-sidebar h3{
    display: none;
}

.small-sidebar hr{
    width: 505;
    margin-bottom: 25px;
}

/*----main---*/
.container-section{
    background-color: #f9f9f9;
    padding-left: 17%;
    padding-right: 2%;
    padding-top: 20px;
    padding-bottom: 20px;
}

.large-container{
    /* padding-left: 7%; */
}

.banner{
    width: 100%;
}

.banner img{
    width: 100%;
    border-radius: 8px;
}


.list-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-column-gap: 16px;
    grid-row-gap: 30px;
    margin-top: 15px;
}

#video-tags{
    list-style: none;
  display: inline-block;
  margin: 0 20px;
  position: relative;
}

.video-list .thumbnail{
    width: 100%;
    border-radius: 5px;
    
}

.video-list .flex-div{
    align-items: flex-start;
    margin-top: 7px;
    /* position: absolute; */
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.144); */
}

.video-list .flex-div img{
    width: 35px;
    margin-right: 10px;
    border-radius: 50%;

}

.video-info{
    color: #5a5a5a;
    font-size: 13px;
}

.video-info a{
    color: #000;
    font-weight: 600;
    display: block;
    margin-bottom: 5px;
}

@media (max-width: 900px) {
    .menu{
        display: none;
    }
    .sidebar{
        display: none;
    }
    .container, .large-container{
        padding-left: 5%;
        padding-right: 5%;
    }
    .nav-right img{
        display: none;
    }
    .nav-right .user{
        display: block;
        width: 30px;
    }
    .nav-middle .search input{
        width: 100px;
    }
    .nav-middle .mic{
        display: none;
    }
    .logo{
        width: 90px;
    }
}


/*--new page---*/

.play-contain{
    padding-left: 2%;
}

.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.play-vid{
    flex-basis: 69%;
}


.right-sidebar{
    flex-basis: 30%;
}

.play-vid video{
    width: 100%;
}

.side-list{
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
}

.side-list img{
    width: 100%;
}

.side-list .small-size{
    flex-basis: 49%;
}

.side-list .video-info{
    flex-basis: 49%;
}

.play-vid .tags a{
    color: #0000ff;
    font-size: 15px;
}

.play-vid h3{
    font-weight: 600;
    font-size: 22px;
    margin-top: 8px;
}

.play-vid .play-info{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-top: 10px;
    font-size: 15px;
    color: #5a5a5a;
} 

.play-vid .play-info a img{
    width: 20px;
    margin-right: 8px;
}

.play-vid .play-info a {
    display: inline-flex;
    align-items: center;
    margin-left: 15px;
}

.play-vid hr{
    border: 0;
    height: 1px;
    background-color: #ccc;
    margin: 10px 0;
}

.owner{
    display: flex;
    align-items: center;
    margin-top: 20px;
}

.owner div{
    flex: 1;
    line-height: 18px;
}

.owner img{
    width: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.owner div p{
    color: #000;
    font-weight: 600;
    font-size: 18px;
}

.owner div span{
    font-size: 13px;
    color: #5a5a5a;
}

.owner button{
    background-color: red;
    color: #fff;
    padding: 8px 30px;
    border: 0;
    outline: 0;
    border-radius: 4px;
    cursor: pointer;
}

.description{
    padding-left: 55px;
    margin: 15px 0;
}

.description p{
    font-size: 14px;
    margin-bottom: 5px;
    color: #5a5a5a;
}

.description h4{
    font-size: 14px;
    color: #5a5a5a;
    margin-top: 15px;
}

.add-comment{
    display: flex;
    align-items: center;
    margin: 30px 0;
}

.add-comment img{
    width: 40px;
    border-radius: 50%;
    margin-right: 15px;
}

.add-comment input{
    border: 0;
    outline: 0;
    border-bottom: 1px solid #ccc;
    width: 100%;
    padding-top: 10px;
    background: transparent;
}

.prev-comnet{
    display: flex;
    align-items: center;
    margin: 20px 0;
    width: 100%;
}

.prev-comnet img{
    width: 40px;
    border-radius: 50%;
    margin-right: 15px;
}

.prev-comnet h3{
    font-size: 14px;
    margin-bottom: 2px;
}

.prev-comnet h3 span{
    font-size: 12px;
    color: #5a5a5a;
    font-weight: 500;
    margin-left: 5px;
}

.prev-comnet .action{
    display: flex;
    align-items: center;
    margin: 8px 0;
    font-size: 14px;
}

.prev-comnet .action img{
    border-radius: 0;
    width: 20px;
    margin-right: 5px;
}

.prev-comnet .action span{
    margin-right: 20px;
    color: #5a5a5a;
}

.prev-comnet .action a{
    color: #17c;
}

@media (max-width:900px) {
    .play-vid{
        flex-basis: 100%;
    }
    .right-sidebar{
        flex-basis: 100%;
    }
    .play-contain{
        padding-left: 5%;
    }
    .description{
        padding-left: 0;
    }
    .play-vid .play-info a{
        margin-left: 0;
        margin-right: 15px;
        margin-top: 15px;
    }
}

.iframe-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%;
    height: 0;
    margin-top: 20px;
  }
  
  .iframe-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  #secret{
    color: #0000ff;
    font-size: 2000px;
  }

  .bg-1{
    color: #26416c
  }

    </style>
</head>
<body>
  

    
