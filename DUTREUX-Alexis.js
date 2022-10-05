const txtAnim = document.querySelector('.event1');
console.log();
new Typewriter(txtAnim, {

    // deleteSpeed : 20
})
.typeString('"Hello World !"')
.pauseFor(0)
.start()