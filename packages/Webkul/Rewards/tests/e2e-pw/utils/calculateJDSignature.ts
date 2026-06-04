import crypto from 'crypto';

export function calculateJDSignature(params: Record<string, any>, appSecret: string): string {
  // Step 1: Sort keys alphabetically (ASCII order)
  const sortedKeys = Object.keys(params)
    .filter(key => key !== 'sign' && params[key] != null)
    .sort();

  // Step 2: Concatenate key + value (JSON.stringify objects/arrays)
  let builder = appSecret;
  for (const key of sortedKeys) {
    let value = params[key];
    if (typeof value === 'object' && value !== null) {
      value = JSON.stringify(value);
    } else {
      value = String(value);
    }
    builder += key + value;
  }
  builder += appSecret;

  // Step 3: MD5 lowercase
  return crypto.createHash('md5').update(builder, 'utf8').digest('hex');
}

