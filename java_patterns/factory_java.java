package java_patterns;

interface vehical {
    void drive();
}

interface vehicalfactory {
    vehical getinstance();
}

class car implements vehical {
    public void drive() {
        System.out.println(" drive a car");
    }

}

class bike implements vehical {
    public void drive() {
        System.out.println(" drive a bike");
    }
}

class carfactory implements vehicalfactory {
    public vehical getinstance() {
        return new car();

    }
}

class bikeFactory implements vehicalfactory {
    public vehical getinstance() {
        return new bike();
    }
}

public class factory_java {
    public static void main(String args[]) {
        vehicalfactory carfactory = new carfactory();
        vehical car = carfactory.getinstance();
        car.drive();

    }
}
