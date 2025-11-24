package pertemuan9;

import java.util.Scanner;

public class latihanprogramkasir {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Masukan Nama Barang:");
        String nama = sc.nextLine();
        System.out.println("Masukan Harga Satuan:");
        double harga = sc.nextDouble();
        System.out.println("Masukan Jumlah Beli:");
        int jumlah = sc.nextInt();
    
        double total = harga * jumlah;
        double diskon;

        if (total > 39300) {
            diskon = total * 0.03;
        } else {
            diskon = 0;
        }

        double totalbayar = total - diskon;

        System.out.println("\n=========STRUK PEMBELIAN=========");
        System.out.println("Nama Barang   : " + nama);
        System.out.println("Harga Satuan  : " + harga);
        System.out.println("Jumlah Beli   : " + jumlah);
        System.out.println("Total Harga   : " + total);
        System.out.println("Diskon        : " + diskon);
        System.out.println("Total Bayar   : " + totalbayar);
        System.out.println("=================================");
    }
}
