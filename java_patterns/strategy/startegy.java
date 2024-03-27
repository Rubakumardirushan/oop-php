package java_patterns.strategy;

interface PaymentStrategy {
    void pay(double amount);
}

class CreditCardPayment implements PaymentStrategy {
    private String cardNumber;
    private String expiryDate;
    private String cvv;

    public CreditCardPayment(String cardNumber, String expiryDate, String cvv) {
        this.cardNumber = cardNumber;
        this.expiryDate = expiryDate;
        this.cvv = cvv;
    }

    @Override
    public void pay(double amount) {
        System.out.println("Paid " + amount + " using credit card.");
    }

}

class PayPalPayment implements PaymentStrategy {
    private String email;
    private String password;

    public PayPalPayment(String email, String password) {
        this.email = email;
        this.password = password;
    }

    @Override
    public void pay(double amount) {
        System.out.println("Paid " + amount + " using PayPal.");
    }
}

class ShoppingCart {
    private PaymentStrategy paymentStrategy;

    public void setPaymentStrategy(PaymentStrategy paymentStrategy) {
        this.paymentStrategy = paymentStrategy;
    }

    public void checkout(double amount) {
        paymentStrategy.pay(amount);
    }
}

public class startegy {

    public static void main(String args[]) {
        ShoppingCart cart = new ShoppingCart();

        // Set payment strategy as credit card
        cart.setPaymentStrategy(new CreditCardPayment("1234 5678 9012 3456", "12/25", "123"));

        // Checkout with the set payment strategy
        cart.checkout(100.0);

        // Set payment strategy as PayPal
        cart.setPaymentStrategy(new PayPalPayment("example@example.com", "password"));

        // Checkout with the set payment strategy
        cart.checkout(200.0);
    }
}
