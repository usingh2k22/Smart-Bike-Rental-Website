gsap.to(".nav-container",{
    
    backgroundColor:"black",
    duration:1,
    scrollTrigger:{
        trigger:".nav-container",
        scroller:"body",
        start:"top -10",
        scrub:2
    }

})