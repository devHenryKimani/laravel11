import { computed, isRef } from 'vue'
 export const useMonthlyPayment = (total, intrestRate, duration) => {
   const monthlyPayment = computed(() => {
    const principle = isRef(total) ? total.value : total
    const monthlyIntrest = (isRef(intrestRate) ? intrestRate.value : intrestRate) / 100 / 12
    const numberOfPaymentMonths = (isRef(duration) ? duration.value : duration) * 12
    return principle * monthlyIntrest * (Math.pow(1 + monthlyIntrest, numberOfPaymentMonths)) / (Math.pow(1 + monthlyIntrest, numberOfPaymentMonths) - 1)

  })

  const totalPaid = computed(() => {
    return (isRef(duration) ? duration.value : duration) * 12 * monthlyPayment.value
  })
  const totalIntrest = computed(() => totalPaid.value - (isRef(total) ? total.value : total))
  return { monthlyPayment, totalPaid, totalIntrest }
}