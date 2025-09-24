1. category (name) 2. sub_category (name) 3. brand (name) 4. suplier 5. product 6. buyer 7. stock movements 8. users

1️⃣ Tables & Fields
1. Category

id (PK)

name (string, unique)

created_at, updated_at

2. SubCategory

id (PK)

category_id (FK → categories.id)

name (string, unique per category)

created_at, updated_at

3. Brand

id (PK)

name (string, unique)

created_at, updated_at

4. Supplier

id (PK)

name (string)

phone (string)

email (string, unique)

address (text)

created_at, updated_at

5. Product

id (PK)

name (string)

category_id (FK → categories.id)

sub_category_id (FK → sub_categories.id)

brand_id (FK → brands.id)

supplier_id (FK → suppliers.id)

price (decimal)

quantity (integer)

image (string, nullable)

status (boolean, default: active)

created_at, updated_at

6. Buyer

id (PK)

name (string)

phone (string)

email (string, unique)

address (text)

created_at, updated_at

7. StockMovements

id (PK)

product_id (FK → products.id)

user_id (FK → users.id)

type (enum: 'in', 'out')

quantity (integer)

date (timestamp)

remarks (text, nullable)

created_at, updated_at

8. Users

Already done (employees + registration + roles)