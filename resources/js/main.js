let universe = document.querySelector('.bg-universe');
let ctx = universe.getContext('2d');
universe.width = window.innerWidth;
universe.height = window.innerHeight;

let particlesArray;

class Particle {
    constructor(x,y,size,color){
        this.x=x;
        this.y=y;
        this.size=size;
        this.color=color;
        this.velocityX= Math.random()*0.5-0.25;
        this.velocityY= Math.random()*0.5-0.25;
        this.baseX=this.x;
        this.baseY=this.y;
        this.density= Math.random()*30+1;
    }

    draw(){
        ctx.beginPath();
        ctx.arc(this.x,this.y,this.size,0,Math.PI*2);
        ctx.fillStyle=this.color;
        ctx.fill();
    }

    update(mouse){
        let dx = mouse.x - this.x;
        let dy = mouse.y -this.y;
        let distance = Math.sqrt(dx*dx+dy*dy);
        let forceDirectionX = dx/distance;
        let forceDirectionY= dy/distance;
        let maxDistance = mouse.radius;
        let force = (maxDistance-distance)/maxDistance;

        if(distance<mouse.radius){
            this.x-=forceDirectionX*force*this.density;
            this.y-=forceDirectionY*force*this.density;
        }else{
            if(this.x !== this.baseX){
                let dx = this.x - this.baseX;
                this.x -= dx/10;
            }
            if(this.y !== this.baseY){
                let dy = this.y - this.baseY;
                this.y -= dy/10;
            }
        }
    }
}

function init(){
    particlesArray=[];
    let numberOfParticles=(universe.width*universe.height)/9000;
    for(let i =0; i<numberOfParticles; i++){
        let size = Math.random()*2+1;
        let x = Math.random()*universe.width;
        let y = Math.random()*universe.height;
        let color = 'white';
        particlesArray.push(new Particle(x,y,size,color));
    }
}

let mouse = {
    x:null,
    y:null,
    radius: (universe.height/100)*(universe.width/100)
};

window.addEventListener('mousemove', function (event){
    mouse.x=event.x;
    mouse.y=event.y;
});

window.addEventListener('resize',function(){
    universe.width= window.innerWidth;
    universe.height=window.innerHeight;
    mouse.radius=(universe.height/100)*(universe.width/100);
    init();
});

function animate(){
    ctx.clearRect(0,0,universe.width,universe.height);
    for(let i=0; i< particlesArray.length;i++){
        particlesArray[i].draw();
        particlesArray[i].update(mouse);
    }
    requestAnimationFrame(animate);
}


init();
animate();
