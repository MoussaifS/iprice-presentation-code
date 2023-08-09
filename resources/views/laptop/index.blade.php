<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iprice</title>


    <!-- Style  -->

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css" />
</head>

<body class="ba flex justify-around bg-washed-blue">
    <div class="pa6  bg-washed-red ">
        <form action="/recommended-laptop" method="POST" enctype="multipart/form-data"
            class="wflex flex-column   h-100  bg-washed-yellow ">
            @csrf
            {{-- screen size --}}
            <div>
                <span>Would you like a smaller or larger screen on your computer?</span><br>

                <input type="radio" name="screen" value="large">
                <label for="large-screen">Large size screen</label>
                <br>


                <input type="radio" name="screen" value="medium">
                <label for="medium-screen">medium size screen</label>
                <br>


                <input type="radio" name="screen" value="small">
                <label for="small-screen">small size screen</label>
                <br>
            </div>

            {{-- ram size --}}
            <div>
                <span>How much memory (RAM) do you want your computer to have?</span><br>

                <input type="radio" name="ram" value="high">
                <label for="high">for running multiple programs and demanding tasks</label>
                <br>


                <input type="radio" name="ram" value="avg">
                <label for="avg">for multitasking and everyday use</label>
                <br>


                <input type="radio" name="ram" value="low">
                <label for="low">for basic tasks</label>
                <br>
            </div>

            {{-- processor power --}}
            <div>
                <span>What do you want to do most on your new computer?</span><br>

                <input type="checkbox" name="processor[]" value="avg">
                <label for="avg">Play games</label>
                <br>

                <input type="checkbox" name="processor[]" value="avg">
                <label for="avg">create art or videos</label>
                <br>

                <input type="checkbox" name="processor[]" value="avg">
                <label for="avg">write code</label>
                <br>

                <input type="checkbox" name="processor[]" value="low">
                <label for="low">school or office work</label>
                <br>

                <input type="checkbox" name="processor[]" value="low">
                <label for="low">browse the internet</label>
                <br>

            </div>
            {{-- sdd size --}}
            <div>
                <span>How much storage space do you want your computer to have?</span><br>

                <input type="radio" name="storage" value="high">
                <label for="high"> a lot of space </label>
                <br>


                <input type="radio" name="storage" value="avg">
                <label for="avg">moderate amount space</label>
                <br>


                <input type="radio" name="storage" value="low">
                <label for="low">A little</label>
                <br>
            </div>

            <input class="bw0 br2 bg-dwyl-teal pa2  fw1 tc  tracked" value="Submit" type="submit">
        </form>

    </div>
</body>

</html>
