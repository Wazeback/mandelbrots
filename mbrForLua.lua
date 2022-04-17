
mbr = {};

yRange = 1;

xRangeMin = -1.5;
xRangeMax = 0.5;

scale = 100;
maxI = 1000;

for yGlobal=-1*yRange*scale,yRange*scale,1 do
    mbr[yGlobal] = {};
    for xGlobal=xRangeMin*scale,xRangeMax*scale,1 do

        x = 0;
        y = 0;
        x0 = xGlobal/scale;
        y0 = yGlobal/scale;

        i = 0;

        while(x*x + y*y <= 4 and i < maxI) do
            xTemp = x*x - y*y + x0;
            y = 2*x*y + y0;
            x = xTemp;
            i = i+1;
        end;

        if(i == maxI) then
            mbr[yGlobal][xGlobal] = "#";
        else
            mbr[yGlobal][xGlobal] = " ";
        end;
        io.write(mbr[yGlobal][xGlobal]);
        io.write(" ");
    end;
    io.write("\n");
end;
