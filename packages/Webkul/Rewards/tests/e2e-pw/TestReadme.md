# Playwright Testing Setup Guide

This README explains how to set up and run Playwright tests for the JD Connector inside a monorepo environment.

---

## 🔧 Environment Variables Setup

Before running the tests, configure your JD API credentials.

Create a `.env` file inside the **test directory** and add:

```env
JD_APP_KEY=
JD_APP_SECRET=
JD_ACCESS_TOKEN=
JD_BASE_URL=https://api.joybuy.com/router
```

### Notes:

* Regenerate a **fresh access token** and put it in `JD_ACCESS_TOKEN`.
* Fill the remaining fields with valid JD API keys.

---

## 📦 Install Dependencies (Monorepo Setup)

Follow these steps carefully to avoid nested installation issues.

### 1. Remove nested node_modules (Monorepo Fix)

```bash
cd client/bagisto/packages/Webkul/JDConnector
rm -rf node_modules package-lock.json
```

### 2. Install dependencies from the root

```bash
cd client/bagisto
npm install
```

### 3. Go to the Playwright test folder

```bash
cd packages/Webkul/JDConnector/test/e2e-pw
```

### 4. Install Playwright browsers

```bash
npx playwright install
```

---

## ▶️ Run the Test Suite

To execute the complete Playwright test suite:

```bash
npx playwright test
```

### Run in headed mode (browser visible)

```bash
npx playwright test --headed
```

### Open Playwright UI mode

```bash
npx playwright test --ui
```

---

## 📁 Project Structure Example

```
client/
└── bagisto/
    ├── packages/
    │   └── Webkul/
    │       └── JDConnector/
    │           └── test/
    │               └── e2e-pw/
    └── .env (inside test folder)
```

---

## 📝 Tips

* Regenerate your access token if authentication fails.
* Do not commit your `.env` file.