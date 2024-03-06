package Java;

public class Car extends Vehicle {
    private int numOfSeats;
    private int numOfDoors;

    public Car(String plateNumber, String brand, int year, String color, int numOfSeats, int numOfDoors) {
        super(plateNumber, brand, year, color);
        this.numOfSeats = numOfSeats;
        this.numOfDoors = numOfDoors;
    }

    @Override
    public void displayInfo() {
        super.displayInfo();
        System.out.println("Number of Seats: " + numOfSeats);
        System.out.println("Number of Doors: " + numOfDoors);
    }
}
