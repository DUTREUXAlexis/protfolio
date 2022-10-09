


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
        .typeString('')

        .start()