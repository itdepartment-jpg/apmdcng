export interface Recipient {
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
