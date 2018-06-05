(function(){
    var Clock = Class.create({
        initialize: function(){
            this.canvas = $('canvas');
            this.cxt = this.canvas.getContext('2d');
            this.cxt.strokeStyle = "#393939";
            this.draw();
        },
        
        draw: function(){
            this.cxt.clearRect(0, 0, this.canvas.width, this.canvas.height);
            var date = new Date();
            var h = date.getHours();
            if(h>= 12) 
            h=h-12;
            var m = date.getMinutes();
            var s = date.getSeconds()
            this.drawCenter();
            this.drawHourPointer(h + m / 60);
            this.drawMinutePointer(m + s / 60);
            setTimeout(function(){
                this.draw();
            }.bind(this), 10000)
        },
        drawHourPointer: function(h){
            var result = this.getHPointer(h, 40)
            this.cxt.lineWidth = 8;
            this.cxt.moveTo(result.x2, result.y2);
            this.cxt.lineTo(result.x1, result.y1);
            this.cxt.closePath();
            this.cxt.stroke();
        },
        drawMinutePointer: function(m){
            this.cxt.beginPath();
            var result = this.getSPointer(m, 55)
            this.cxt.lineWidth = 4;
            this.cxt.moveTo(result.x2, result.y2);
            this.cxt.lineTo(result.x1, result.y1);
            this.cxt.closePath();
            this.cxt.stroke();
        },
        
        drawSecondPointer: function(s){
            this.cxt.beginPath();
            var result = this.getSPointer(s, 65)
            this.cxt.lineWidth = 2;
            this.cxt.moveTo(result.x2, result.y2);
            this.cxt.lineTo(result.x1, result.y1);
            this.cxt.stroke();
        },
        drawCenter: function(){
            this.cxt.beginPath();
            this.cxt.lineWidth = 2;
            this.cxt.arc(82, 82, 2, 0, Math.PI * 2, true);
            this.cxt.stroke();
        },
        getHPointer: function(i, r){
            var angler = i * Math.PI / 6;
            return this.getPoint(angler, r);
        },
        getSPointer: function(i, r){
            var angler = i * Math.PI / 30;
            return this.getPoint(angler, r);
        },
        getPoint: function(angler, r){
            var result = {
                x1: 82 + r * Math.sin(angler),
                y1: 82 - r * Math.cos(angler),
                x2: 82,
                y2: 82,
            };
            return result;
        },
    });
    
    document.onLoad(function(){
        new Clock();
    });
})();
