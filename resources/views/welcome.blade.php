<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iprice</title>


    <!-- Style  -->

    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    
</head>

<body>
    <div >
        <form action="" method="post">
            {{-- screen size --}}
            <span>Would you like a smaller or larger screen on your computer?</span><br>

            <input type="radio" name="screen" value="large-screen">
            <label for="large-screen">Large size screen</label>
            <br>


            <input type="radio" name="screen" value="medium-screen">
            <label for="medium-screen">medium size screen</label>
            <br>


            <input type="radio" name="screen" value="small-screen">
            <label for="small-screen">small size screen</label>
            <br>


            {{-- ram size --}}gitr
            <span>How much memory (RAM) do you want your computer to have?</span><br>

            <input type="radio" name="ram" value="high-ram">
            <label for="high-ram"> a lot (for running multiple programs and demanding tasks)</label>
            <br>


            <input type="radio" name="ram" value="avg-ram">
            <label for="avg-ram">moderate amount (for multitasking and everyday use)</label>
            <br>


            <input type="radio" name="ram" value="low-ram">
            <label for="low-ram">A little (for basic tasks)</label>
            <br>


            {{-- processor power --}}
            <span>What do you want to do most on your new computer?</span><br>

            <input type="checkbox" name="processor" value="-ram">
            <label for="high">Play games</label>
            <br>

            <input type="checkbox" name="processor" value="avg-ram">
            <label for="low">school or office work</label>
            <br>

            <input type="checkbox" name="processor" value="avg-ram">
            <label for="low">school or office work</label>
            <br>

            <input type="checkbox" name="processor" value="avg-ram">
            <label for="avg">create art or videos</label>
            <br>

            <input type="checkbox" name="processor" value="avg-ram">
            <label for="low">browse the internet</label>
            <br>

            <input type="checkbox" name="processor" value="low-ram">
            <label for="avg-pro">write code</label>
            <br>

            {{-- sdd size --}}
            <span>How much memory (RAM) do you want your computer to have?</span><br>

            <input type="radio" name="storage" value="high-storage">
            <label for="high-storage"> a lot of space </label>
            <br>


            <input type="radio" name="storage" value="avg-storage">
            <label for="avg-storage">moderate amount space</label>
            <br>


            <input type="radio" name="storage" value="low-storage">
            <label for="low-storage">A little</label>
            <br>

            Options: A little, a moderate amount, or a lot of space.





            <input class="bw0 br2 bg-dwyl-teal pa2 white fw1 tc ttu tracked" type="submit">
        </form>

    </div>
</body>

</html>
