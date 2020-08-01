(()=>{
    const foreach = Array.prototype.forEach;
    const navLinks = document.querySelectorAll('ul li a');
    const title = document.getElementById('title');

    const sections = document.querySelectorAll('main > div');
    foreach.call(sections, (section)=>{
        section.style.display = 'none'; 
        foreach.call(navLinks, (link)=>{
            link.addEventListener('click', ()=>{
                title.textContent = link.innerText;
                console.log(title.textContent.toLowerCase() , section.getAttribute('id'));
                if(title.textContent.toLowerCase() === section.getAttribute('id')){
                    hideSections();
                    section.style.display = "block";
                }
                clearActiveClass();
                link.classList.add('active');
            });
        });
    });
})();
const clearActiveClass = () => {
    const navLinks = document.querySelectorAll('ul li a');
    const foreach = Array.prototype.forEach;
    foreach.call(navLinks, (link)=>{
        link.classList.remove('active');
    });
};

const hideSections = () => {
    const sections = document.querySelectorAll('main > div');
    const foreach = Array.prototype.forEach;
    foreach.call(sections, (section)=>{
        section.style.display = 'none'; 
    });
}