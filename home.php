<?php include("header.html")
?>

<style>
    *{
        padding: 0;
    }
    body {
        background-color: aqua;
    }

    #home {
        background-color: black;
        height:600px;
        width: 100%;
        padding: 40px;
    }
    .r1{
        height:300px;
        width:100%;
    }

    .c1 {
        height:300px;
        width: 50%;
        float:left;
        
    }
    .c1 p{
        color: white;
        text-align: center;
    }

    .c2{
        height: 300px;
        width: 50%;
        float:left;
    }

    .c2 img {
        height: 100px;
        width:300px;
        
    }
    .r2{
        height:300px;
        width:100%;
    }
    .c4, .c5{
        height:300px;
        width:50%;
        float:left;
    }
    .c4 img {
        height:100px;
        width: 300px;
    }
    .c5 p{
        color:white;
    }
</style>

<div id="home">
    <div class="r1">
    <div class="c1">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat asperiores sequi
            consectetur earum autem, iure blanditiis, nam quae minima voluptatem ratione
            exercitationem, dicta optio in eligendi deserunt distinctio aspernatur sint.
        </p>
    </div>
    <div class="c2">
        <img src="svtlogo.jpg" alt="Logo">
    </div>
    </div>
    <div class="r2">
        <div class="c4">
            <img src="uiaia.jpeg" >
        </div>
        <div class="c5">
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sequi, nesciunt enim dolorum iure sint minus? Autem consequuntur delectus reprehenderit quae id ipsam, qui cumque enim ab quasi sapiente. Culpa.</p>
        </div>
    </div>    
</div>

<?php include("footer.html")
?>
