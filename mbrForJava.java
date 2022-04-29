
class mandelbrot {
    public static void main(String[] args) {

        int yRange = 1;
        int maxI = 1000;

        double xRangeMin = -1.5;
        double xRangeMax = 0.5;

        int scale = 10;

        
        int yGlobalOffset = -1*yRange*scale;
        int xGlobalOffset = (int)xRangeMin*scale;

        String mbr[] = new String[yRange*scale];

        for (int yGlobal = -1*yRange*scale; yGlobalOffset < (yRange*scale)+1; yGlobal++) {
            for (int xGlobal = (int)xRangeMin*scale; xGlobalOffset < xRangeMax*scale; xGlobal++) {
                double x = 0;
                double y = 0;
                double x0 = xGlobal/scale;
                double y0 = yGlobal/scale;

                int i = 0;

                while(x*x + y*y <= 4 && i < maxI){
                    double xTemp = x*x - y*y + x0;
                    y = 2*x*y + y0;
                    x = xTemp;
                    i = i+1;
                }


                if(i == maxI){
                    mbr[yGlobal-yGlobalOffset] = "#.";
                } else {
                    mbr[yGlobal-yGlobalOffset] = "..";
                }
            } 
          //the program halts here right now. this is because i the val xglobal never even updates. it just loops for ever. 
        }
        for (int yGlobal = -1*yRange*scale; yGlobalOffset < (yRange*scale)+1; yGlobal++) {
            System.out.print(mbr[yGlobal-yGlobalOffset]);
        }
    }
}
