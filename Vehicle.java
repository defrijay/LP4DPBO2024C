package Java;

public class Vehicle {
    protected String plateNumber;
    protected String brand;
    protected int year;
    protected String color;

    public Vehicle(String plateNumber, String brand, int year, String color) {
        this.plateNumber = plateNumber;
        this.brand = brand;
        this.year = year;
        this.color = color;
    }

    public void displayInfo() {
        System.out.println("Plate Number: " + plateNumber);
        System.out.println("Brand: " + brand);
        System.out.println("Year: " + year);
        System.out.println("Color: " + color);
    }
}

