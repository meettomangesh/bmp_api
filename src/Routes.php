<?php

return [

    ['GET', '/', ['Api\Controllers\HomepageController', 'show']],
    ['POST', '/api-test', ['Api\Controllers\HomepageController', 'showTest']],
    ['POST', '/getAccessToken', ['Api\Controllers\OauthController', 'getAccessToken']], // Get the Access Token for the API access
    
    //Wallet related routes
    ['POST', '/getWalletBalance', ['Api\Controllers\WalletController', 'getWalletBalance']], // To get wallet balance
    ['POST', '/getAllWalletAddress', ['Api\Controllers\WalletController', 'getAllWalletAddress']], // To get all wallet address
    ['POST', '/createWallet', ['Api\Controllers\WalletController', 'createWallet']], // To create wallet
    ['POST', '/getAllWalletDetailByUserName', ['Api\Controllers\WalletController', 'getAllWalletDetailByUserName']], // To get wallet details by user name
    ['POST', '/sendPayment', ['Api\Controllers\WalletController', 'sendPayment']], // To get wallet details by user name
    ['POST', '/getAllWalletDBTransactionDetailByUserName', ['Api\Controllers\WalletController', 'getAllWalletDBTransactionDetailByUserName']], // To get wallet transactions by user name
    ['POST', '/getAllWithdrawalDBTransactionByUserName', ['Api\Controllers\WalletController', 'getAllWithdrawalDBTransactionByUserName']], // To get wallet withdrawl transactions by user name


    //Payment receive related routes
    ['POST', '/generateAddressToRecivePayment', ['Api\Controllers\ReceiveController', 'generateAddressToRecivePayment']], // To get all wallet address
    ['POST', '/getCallbacklogsByInvoiceId', ['Api\Controllers\ReceiveController', 'getCallbacklogsByInvoiceId']], // To get all wallet address
    ['POST', '/checkForAvailableInvoiceToRecivePayment', ['Api\Controllers\ReceiveController', 'checkForAvailableInvoiceToRecivePayment']], // Check if invoice is already exist or not
    ['POST', '/checkForPaidInvoiceToRecivePayment', ['Api\Controllers\ReceiveController', 'checkForPaidInvoiceToRecivePayment']], // Check if invoice is already exist or not
    ['POST', '/getPoolDataToRecivePayment', ['Api\Controllers\ReceiveController', 'getPoolDataToRecivePayment']], // Check if invoice is already exist or not
    ['POST', '/withdrawalPayment', ['Api\Controllers\ReceiveController', 'withdrawalPayment']], // To add withdrawl request 
    ['POST', '/getInvoiceByID', ['Api\Controllers\ReceiveController', 'getInvoiceByID']], // To get invoice by id
    ['POST', '/sendInvoiceNotificationByID', ['Api\Controllers\ReceiveController', 'sendInvoiceNotificationByID']], // To get invoice by id
           
    //Tree related routes
    ['POST', '/joinTree', ['Api\Controllers\TreeController', 'joinTree']], // To get all wallet address
    

    
    ['POST', '/loginCustomer', ['Api\Controllers\UserController', 'loginCustomer']],
    ['POST', '/registerCustomer', ['Api\Controllers\UserController', 'registerCustomer']],
    ['POST', '/updateCustomer', ['Api\Controllers\UserController', 'updateCustomer']],
    
    //get user details
    ['POST', '/getAllUserDataByUserName', ['Api\Controllers\UserController', 'getAllUserDataByUserName']],
    ['POST', '/sendTestEmail', ['Api\Controllers\UserController', 'sendTestEmail']],
    ['POST', '/sendForgetPassword', ['Api\Controllers\UserController', 'sendForgetPassword']],
    ['POST', '/verifyEmail', ['Api\Controllers\UserController', 'verifyEmail']],
    ['POST', '/sendEmailVerificationCode', ['Api\Controllers\UserController', 'sendEmailVerificationCode']],
    
    //Admin deatils
    ['POST', '/getAllWalletDBTransactionDetails', ['Api\Controllers\AdminController', 'getAllWalletDBTransactionDetails']], // To get wallet transactions by user name
    ['POST', '/getAllInvoiceDBTransactionDetails', ['Api\Controllers\AdminController', 'getAllInvoiceDBTransactionDetails']], // To get wallet transactions by user name
    ['POST', '/getAllAccountDBTransactionDetails', ['Api\Controllers\AdminController', 'getAllAccountDBTransactionDetails']], // To get wallet transactions by user name
    ['POST', '/getAllCommissionBonusDBDetails', ['Api\Controllers\AdminController', 'getAllCommissionBonusDBDetails']], // To get bonus transactions by user name
    ['POST', '/processWithdrawal', ['Api\Controllers\AdminController', 'processWithdrawal']], // To process withdrawal transactions by user name
    ['POST', '/getSiteOption', ['Api\Controllers\AdminController', 'getSiteOption']], // To site option
    ['POST', '/updateSiteOption', ['Api\Controllers\AdminController', 'updateSiteOption']], // To update site option
    
    //Rank related routes
    ['POST', '/getAllRankData', ['Api\Controllers\RankController', 'getAllRankData']], // To get rank data by user name
    
    //Support related routes
    ['POST', '/getAllSupportTicketByUserName', ['Api\Controllers\SupportController', 'getAllSupportTicketByUserName']], // To get all support tickets
    ['POST', '/addSupportRequest', ['Api\Controllers\SupportController', 'addSupportRequest']], // To get all support tickets
    ['POST', '/processTicket', ['Api\Controllers\SupportController', 'processTicket']],// To update ticket status
    
    //Cron related routes
    ['POST', '/addMiningBonus', ['Api\Controllers\CommandController', 'addMiningBonus']], // To get all support tickets
    ['POST', '/resetDailyBinaryIncome', ['Api\Controllers\CommandController', 'resetDailyBinaryIncome']], // To reset the day bal
    ['POST', '/checkAndProcessExpiredInvoice', ['Api\Controllers\CommandController', 'checkAndProcessExpiredInvoice']], // To check & process expired invoices
    
    
    ['POST', '/sendApiEmail', ['Api\Controllers\AdminController', 'sendApiEmail']], // To send email

    
];
