import java.rmi.Remote;

public interface MulI extends Remote{
    public int mul(int x, int y) throws Exception;
}