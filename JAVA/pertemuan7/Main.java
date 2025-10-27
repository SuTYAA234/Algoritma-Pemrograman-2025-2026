package pertemuan7;
import java.util.Scanner;

public class Main{
    public static void main (String[]args){
        Scanner sc = new Scanner(System.in);
        System.out.println("masukkan nilai tugas: ");
        double tugas = sc.nextDouble();
        System.out.println("masukan nilai UTS: ");
        double uts = sc.nextDouble();
        System.out.println("masukan nilai UAS: ");
        double uas =sc.nextDouble();

        double nilaiAkhir =(0.3 *tugas)+(0.3 *uts)+(0.4 *uas);

        System.out.println("Nilai Akhir=" + nilaiAkhir);
        if(nilaiAkhir>=60)
            System.out.println("status:LULUS");
        else
            System.out.println("status:TIDAK LULUS");
    }
}