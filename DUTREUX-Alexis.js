


    const txtAnim = document.querySelector('.event1');
    console.log();
    new Typewriter(txtAnim, {
        loop:true,
        deleteSpeed : 5
    })
        .typeString('Hello World !')
        .pauseFor(2000)
        .deleteAll()
        .typeString('Bienvenue sur mon portfolio !')
        .pauseFor(2000)
        .deleteAll()
        .start()

    const txtAnim2 = document.querySelector('.event2');

    console.log();
    new Typewriter(txtAnim2, {

        deleteSpeed : 5,
        loop: true,

    })
        .typeString(' Contactez moi !')
        .pauseFor(1000)
        .deleteAll()
        .typeString(' Appellez moi !')
        .pauseFor(1000)
        .deleteAll()
        .typeString(' Envoyez moi un mail !')
        .pauseFor(1000)
        .deleteAll()
        .start()

    const txtAnim3 = document.querySelector('.event3');
    console.log();
    new Typewriter(txtAnim3, {
        loop:true,
        deleteSpeed : 5
    })
        .typeString('le chacha')
        .pauseFor(2000)
        .deleteChars(9)
        .typeString('la rumba')
        .pauseFor(2000)
        .deleteChars(8)
        .typeString('la samba')
        .pauseFor(2000)
        .deleteChars(8)
        .typeString('le jive')
        .pauseFor(2000)
        .deleteChars(7)
        .typeString('le paso doble')
        .pauseFor(2000)
        .deleteChars(13)
        .typeString('la valse anglaise')
        .pauseFor(2000)
        .deleteChars(17)
        .typeString('la valse viennoise')
        .pauseFor(2000)
        .deleteChars(18)
        .typeString('le tango')
        .pauseFor(2000)
        .deleteChars(8)
        .typeString('le Quick Step')
        .pauseFor(2000)
        .deleteChars(13)
        .typeString('le slowfox')
        .pauseFor(2000)
        .deleteChars(10)


        .start()

    //---------------------------------------------- Dragable annimation

    const wrapper = document.querySelector(".wrapper")


    function onDrag({movementX, movementY}){
        let getStyle = window.getComputedStyle(wrapper);
        let left = parseInt(getStyle.left);

        let top = parseInt(getStyle.top);

        wrapper.style.left = `${left + movementX}px`;
        wrapper.style.top = `${top + movementY}px`;
    }


    wrapper.addEventListener("mousedown", ()=>{
        wrapper.addEventListener("mousemove", onDrag);
    });
    document.addEventListener("mouseup", ()=>{
        wrapper.removeEventListener("mousemove", onDrag);
    });


    function change(){
            document.getElementById("wrapper").style.display = "none";
    }

    function apears(){

        if (document.getElementById("wrapper").style.display === "none")
        {
            document.getElementById("wrapper").style.display = "block";
        }
        else
        {
            console.log("Un terminal est déjà ouvert !")
        }
    }

















