// types/invoice.ts

export interface InvoiceItem {
    id: number;
    invoice_id: number;
    description: string;
    quantity: number;
    unit_price: number;
    total?: number;
}

export interface  Recipient {
    name: string;
    address: string;
    address_2?: string; // Optional field
    city: string;
    state: string;
    zip_code?: string; // Optional field
    phone?: string; // Optional field
    email?: string; // Optional field
    fax?: string; // Optional field
}
export interface Invoice {
    id: number;
    customer_name: string;
    customer_email: string;
    invoice_date: string;
    invoice_number: number;
    due_date: string;
    status: "pending" | "paid" | "overdue"; // Optional status enum
    total_amount: number;
    items: InvoiceItem[];
    recipient: Recipient;
}
