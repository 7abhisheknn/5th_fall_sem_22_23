import java.rmi.Naming;

public class Client{
    public static void main(String[] args) throws Exception{
        MulI obj= (MulI)Naming.lookup("MUL");
        int n= obj.mul(2,3);
        System.out.println("Multiplication: "+n);
    }
}