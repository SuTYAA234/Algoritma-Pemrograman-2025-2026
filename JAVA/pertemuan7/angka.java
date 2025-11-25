package pertemuan7;
import java.util.Scanner;

public class angka {
    public static void main(String[]args){
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukan angka pertama:");
        int a = sc.nextInt();
        System.out.println("Masukan angka kedua:");
        int b = sc.nextInt();

        if(a>b)
            System.out.println(a+"lebih besar dari"+ b);
        else if(a<b)
            System.out.println(a+"lebih dari kecil"+ b);
        else
            System.out.println("keduanya sama besar");
        System.out.println("Apakah keduanya sama?"+(a==b));

    }
    
}
