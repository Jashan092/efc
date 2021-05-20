console.log("I am in a new file now");



$(function () {
    /// There are 3 types of selector in jQuery 
    // 1. id selector 
    // 2. class selector 
    // 3. element selector 
    // $('selector').action()            -----> jQuery syntax looks like this
    $('#second').click(function () {
        console.log("second has been clicked");
    })
    // other selectors
    // It will click all the elements
    // $('*').click();
    // Events in jQuery

    // Mouse events ---> click,dblclick, mouseenter, mouseleave, 
    // keyboards events ---> keypress, keydown, keyup , MediaKeyStatusMap
    // form events ---> submit , change, focus,blue 
    // documnet/window events ---> load, resize, scroll,BeforeUnloadEvent
    $('p').dblclick(function () {
        console.log("You double clicked on p");
    })
    $('p').mouseenter(function () {
        console.log("you entered");
    })
    $('p').mouseleave(function () {
        console.log("you're in outside");
    })
    $('p').hover(function () {
        console.log("you hovered");
    })
    // demoing on method 
    $('p').on({
        click: () => {
            console.log('(on) clicked');
        },
        mouseleave: () => {
            console.log("(on) mouseleave");
        }
    })
    // $('#wiki').hide(time,callback);
    // $('#wiki').hide(1000);
    $('#submit').click(() => {
        // $('#wiki').fadeOut(500);
        // $('#wiki').fadeToggle(500);
        // $('#wiki').fadeToggle(500);
        // $('#wiki').slideToggle(500);
        // $('#wiki').slideDown(500);
        $('#wiki').animate({
            opacity:0.3,
            height: '150px',
            width: '350px'
        },500);
        // },'slow');
        // },'fast');
        $('wiki').text("Text bla bla bla");
        // $('wiki').stop()   //---> For stopping the animation 
        $('wiki').val("Value is greeding");   //---> For changing the value
        $('wiki').empty();   //---> Empty the content
        // $('wiki').addClass('myclass')   //---> Add the class
        $('wiki').removeClass('myclass')   //---> remove the class
        $('wiki').css('background-color','cyan');   //---> set the css
        $('wiki').css('background-color');   //---> for knowing the css It will return the color 

    })
})