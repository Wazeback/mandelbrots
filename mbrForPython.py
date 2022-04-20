
mbr = [];

yRange = 1;

xRangeMin = -2;
xRangeMax = 1;

scale = 100;
maxI = 1000;


yGlobal = -1*yRange*scale;
xGlobal = xRangeMin*scale;

yGlobalOffset = -1*yRange*scale;
xGlobalOffset = xRangeMin*scale;


for yGlobal in range(yGlobalOffset, yRange*scale + 1):
    mbr.append("");
    for xGlobal in range(xGlobalOffset, xRangeMax*scale):
        x = 0;
        y = 0;
        x0 = xGlobal/scale;
        y0 = yGlobal/scale;

        i = 0;

        while(x*x + y*y <= 4 and i < maxI):
            xTemp = x*x - y*y + x0;
            y = 2*x*y + y0;
            x = xTemp;
            i = i+1;


        if(i == maxI):
            mbr[yGlobal-yGlobalOffset] += "# ";
        else:
            mbr[yGlobal-yGlobalOffset] += "  ";

for yGlobal in range(yGlobalOffset, yRange*scale + 1):
    print(mbr[yGlobal-yGlobalOffset]);
