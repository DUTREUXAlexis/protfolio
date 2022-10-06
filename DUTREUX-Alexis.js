


    const txtAnim = document.querySelector('.event1');
    console.log();
    new Typewriter(txtAnim, {

        deleteSpeed : 10
    })
        .typeString('Hello World !')
        .pauseFor(3500)
        .deleteAll()
        .typeString('Bienvenue sur mon portfolio !')

        .start(10,1000,1000)

