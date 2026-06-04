import crypto from 'crypto'
export function timestampIstWithOffsets(): string {
  const now = new Date(); // assumes system time is IST

  const pad = (n: number) => n.toString().padStart(2, '0');

  const year  = now.getFullYear();
  const month = pad(now.getMonth() + 1);
  const day   = pad(now.getDate());
  const hour  = pad(now.getHours());
  const min   = pad(now.getMinutes());
  const sec   = pad(now.getSeconds());

  // IST offset is fixed
  const offsetCompact = '+0530';
  const offsetColon   = '+05:30';

  return `${year}-${month}-${day} ${hour}:${min}:${sec} ${offsetCompact}${offsetColon}`;
}
