import java.util.*;  
import java.lang.Math; 

public class PSum
{ 
    public static int a[];
    public static int start;
          public static  int end;
	public static  int gap;

    public static void main(String[] args) 
    { 
        int n,p; 
        // n=10;
      //   p=2;
       Scanner in = new Scanner(System.in);
        n=in.nextInt();
        p=in.nextInt();
        
        start=0;
        end=p;
	gap=1;
        int l= (int)Math.pow(p,n);
       a=new int[l] ;
        for(int i=0;i<l;i++)
        {
            a[i]=in.nextInt();
        }
       in.close();
       /*
       start=0;
        end=p;
       int l= (int)Math.pow(p,n);
       a=new int[l] ;
        for(int i=1;i<=l;i++)
        {
            a[i-1]=i;
        }
*/
     //  in.close();
          
           // MultithreadingDemo object = new MultithreadingDemo(); 
            //object.start(); 
       
           // MultithreadingDemo object = new MultithreadingDemo(); 
            //object.start(); 
            for(int i=0;i<n;i++){
                 if(start==(int)Math.pow(p,n)){
                     start=0;
                     end=(int)Math.pow(p,i+1);
               }
                for(int j=0;j<(int)Math.pow(p,n-i-1);j++){
                     P1 t1= new P1();
                     t1.run();
                     start+=(int)Math.pow(p,i+1);
                     end+=(int)Math.pow(p,i+1);
            }
	gap=(int)Math.pow(p,i+1);
       
    } 
     System.out.println(a[0]);
}
} 
class P1 implements Runnable
{ 
    public void run() 
    { 
        try
        { 
            // Displaying the thread that is running 
            /*System.out.println ("Thread " + 
                  Thread.currentThread().getId() + 
                  " is running"); 
                  */
                  int s=0;
                  PSum m= new PSum();
       for(int i=PSum.start;i<PSum.end;i+=PSum.gap){
                s+=PSum.a[i];
              }
            PSum.a[PSum.start]=s;
        
        // for(int i=Multithread.start+1;i<Multithread.end;i++){
        //        Multithread.a[i]=0;
        //      }
           }
        catch (Exception e) 
        { 
            // Throwing an exception 
            System.out.println ("Exception is caught"); 
            e.printStackTrace();
        } 
    } 
} 
  
// Main Class 