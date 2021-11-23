CREATE TABLE IF NOT EXISTS Transactions (
    account_source INT AUTO_INCREMENT PRIMARY KEY,
    account_dest INT,
    balance_change INT,
    transaction_type VARCHAR(15),
    memo VARCHAR(20),
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expected_total INT,
    FOREIGN KEY (account_source) REFERENCES Accounts(id),
    FOREIGN KEY (account_dest) REFERENCES Accounts(id)
)