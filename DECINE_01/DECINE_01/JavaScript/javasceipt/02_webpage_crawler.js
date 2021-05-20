const links = document.links;
const element = document.location
console.log(element);
const ilink = 'about';
for (let b = 1; b < links.length; b++) {
    if (links[b].href.includes(ilink)) {
        console.log(`links[b].href} is mathced`);
    }
    else{
        console.log("not matched");
    }
    
}